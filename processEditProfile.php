<?php
    include("config.php");

    session_start();

    if(isset($_POST['submit'])){
        //bukan session, coba diubah dulu

        $_SESSION['namadepanSession'] = $_POST['namadepan'];
        $_SESSION['namatengahSession'] = $_POST['namatengah'];
        $_SESSION['namabelakangSession'] = $_POST['namabelakang'];
        $_SESSION['tempatlahirSession'] = $_POST['tempatlahir'];
        $_SESSION['tgllahirSession'] = $_POST['tgllahir'];
        $_SESSION['nikSession'] = $_POST['nik'];
        $_SESSION['warganegaraSession'] = $_POST['warganegara'];
        $_SESSION['emailSession'] = $_POST['email'];
        $_SESSION['nohpSession'] = $_POST['nohp'];
        $_SESSION['alamatSession'] = $_POST['alamat'];
        $_SESSION['kodeposSession'] = $_POST['kodepos'];
        $_SESSION['usernameSession'] = $_POST['username'];
        $_SESSION['password1Session'] = $_POST['password1'];
        $_SESSION['password2Session'] = $_POST['password2'];

        // untuk ambil varnya dulu
        $fotoNama = $_FILES['fotoprofil']['name'];
        $tempNama = $_FILES['fotoprofil']['tmp_name'];
            
        //upload ke filedir
        $folderTujuan = "profilepicture/";
        $unggahFoto = move_uploaded_file($tempNama, $folderTujuan.$fotoNama);
        //simpan pathnya
        $locfoto = $folderTujuan.$fotoNama;
        $_SESSION['locFotoSession'] = $locfoto;
        $_SESSION['activeSession'] = "aktif";

        // untuk ambil varnya dulu
        $fotoNama = $_FILES['fotoprofil']['name'];
        $tempNama = $_FILES['fotoprofil']['tmp_name'];
        $nik = $_POST['nik'];
        //upload ke filedir
        $folderTujuan = "profilepicture/";
        $unggahFoto = move_uploaded_file($tempNama, $folderTujuan.$fotoNama);
        //simpan pathnya
        $locfoto = $folderTujuan.$fotoNama;
        $_SESSION['locFotoSession'] = $locfoto;
        $_SESSION['image'] = $locfoto ;

        //lanjut sini query update
        if(($_POST['password1'] == $_POST['password2']) && (str_ends_with($_POST['email'],'.com') && (str_contains($_POST['email'],'@'))
        && is_numeric($_POST['nohp']) && is_numeric($_POST['kodepos']) && is_numeric($_POST['nik']) && (str_ends_with($fotoNama,'.jpg') || str_ends_with($fotoNama,'.png'))
         )){
                $str_query = "UPDATE msnasabah SET  namadepan='".$_POST['namadepan']."', namatengah='".$_POST['namatengah']."',
                namabelakang='".$_POST['namabelakang']."', tempatlahir='".$_POST['tempatlahir']."', tanggallahir='".$_POST['tgllahir']."',
                nik='".$_POST['nik']."', warganegara='".$_POST['warganegara']."', email='".$_POST['email']."', nohp='".$_POST['nohp']."',
                alamat='".$_POST['alamat']."', kodepos='".$_POST['kodepos']."',photo='".$locfoto."' , username='".$_POST['username']."', password='".$_POST['password1']."'
                WHERE nik='".$_POST['nik']."'";
            
                $query = mysqli_query($connection,$str_query);

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