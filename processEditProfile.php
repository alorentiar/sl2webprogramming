<?php
    include("config.php");

    session_start();

    if(isset($_POST['submit'])){
        //bukan session, coba diubah dulu

        $namaDepan = $_POST['namadepan'];
        $namaTengah = $_POST['namatengah'];
        $namaBelakang = $_POST['namabelakang'];
        $tempatLahir = $_POST['tempatlahir'];
        $tglLahir = $_POST['tgllahir'];
        $nik = $_POST['nik'];
        $wargaNegara = $_POST['warganegara'];
        $email = $_POST['email'];
        $noHp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kodepos'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // untuk ambil varnya dulu
        $fotoNama = $_FILES['fotoprofil']['name'];
        $tempNama = $_FILES['fotoprofil']['tmp_name'];

        //lanjut sini query update
        if(($_POST['password1'] == $_POST['password2']) && (str_ends_with($_POST['email'],'.com') && (str_contains($_POST['email'],'@'))
        && is_numeric($_POST['nohp']) && is_numeric($_POST['kodepos']) && is_numeric($_POST['nik']) && (str_ends_with($fotoNama,'.jpg') || str_ends_with($fotoNama,'.png'))
         )){

            $_SESSION['namadepanSession'] = $namaDepan;
            $_SESSION['namatengahSession'] = $namaTengah;
            $_SESSION['namabelakangSession'] = $namaBelakang;
            $_SESSION['tempatlahirSession'] = $tempatLahir;
            $_SESSION['tgllahirSession'] = $tglLahir;
            $_SESSION['nikSession'] = $nik;
            $_SESSION['warganegaraSession'] = $wargaNegara;
            $_SESSION['emailSession'] = $email;
            $_SESSION['nohpSession'] = $noHp;
            $_SESSION['alamatSession'] = $alamat;
            $_SESSION['kodeposSession'] = $kodePos;
            $_SESSION['usernameSession'] = $username;
            $_SESSION['password1Session'] = $password1;
            $_SESSION['password2Session'] = $password2;


            if($_FILES){
                if(is_uploaded_file($_FILES['fotoprofil']['tmp_name'])){
                    $dbfoto = addslashes(file_get_contents($_FILES['fotoprofil']['tmp_name']));
                    $namadbfoto = getImageSize($_FILES['fotoprofil']['tmp_name']);

                    $str_query = "UPDATE msnasabah SET  namadepan='".$_POST['namadepan']."', namatengah='".$_POST['namatengah']."',
                namabelakang='".$_POST['namabelakang']."', tempatlahir='".$_POST['tempatlahir']."', tanggallahir='".$_POST['tgllahir']."',
                nik='".$_POST['nik']."', warganegara='".$_POST['warganegara']."', email='".$_POST['email']."', nohp='".$_POST['nohp']."',
                alamat='".$_POST['alamat']."', kodepos='".$_POST['kodepos']."',tipephoto='".$namadbfoto."',photo='".$dbfoto."' , username='".$_POST['username']."', password='".$_POST['password1']."'
                WHERE nik='".$_POST['nik']."'";

                    $query = mysqli_query($connection,$str_query);
                }
            }


                if($query){
                    echo "<script>";
                    echo "alert('Berhasil update database');";
                    echo 'window.location="profile.php";';
                    echo "</script>";
                }else{
                    echo "<script>";
                    echo "alert('Gagal update database');";
                    echo 'window.location.href="editProfile.php";';
                    echo "</script>";
                }
            }else{
                echo "<script>";
                echo "alert('Silahkan cek kembali pastikan password1 dan password2 sama, semua inputan sesuai dengan datanya, dan pastikan hanya mengupload file foto berekstensi .jpg dan .png');";
                echo 'window.location.href="editProfile.php";';
                echo "</script>";
            }
    }

?>