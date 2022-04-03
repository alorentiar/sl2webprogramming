<?php
    session_start();
    include("config.php");

    if(isset($_POST['submit'])){
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



        

        // //validasi cek kalo upload foto dan nilai password sama
        if(($password1 == $password2) && (str_ends_with($email,'.com') && (str_contains($email,'@'))
        && is_numeric($noHp) && is_numeric($kodePos) && is_numeric($nik) && (str_ends_with($fotoNama,'.jpg') || str_ends_with($fotoNama,'.png'))
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
            //upload ke filedir
            $folderTujuan = "profilepicture/";
            $unggahFoto = move_uploaded_file($tempNama, $folderTujuan.$fotoNama);
            //simpan pathnya
            $locfoto = $folderTujuan.$fotoNama;
            $_SESSION['locFotoSession'] = $locfoto;
            $_SESSION['activeSession'] = "aktif";

        //     //database

                $string_query = "INSERT into msnasabah values('".$_POST['namadepan']."','".$_POST['namatengah']."','".$_POST['namabelakang']."','".$_POST['tempatlahir']."','".$_POST['tgllahir']."','".$_POST['nik']."','".$_POST['warganegara']."','".$_POST['email']."','".$_POST['nohp']."','".$_POST['alamat']."','".$_POST['kodepos']."','".$locfoto."','".$_POST['username']."','".$_POST['password1']."')";

                $querysukses = mysqli_query($connection,$string_query);

                if($querysukses){
                    echo "<script>";
                    echo "alert('Berhasil input database');";
                    echo 'window.location.href = "index.php";';
                    echo "</script>";
                }else{
                    echo "<script>";
                    echo "alert('Gagal input database');";
                    echo 'window.location.href = "register.php";';
                    echo "</script>";
                }
        }
        
        else{
            $_SESSION['activeSession'] = "tidak";
            header("location:register.php");
        }
    }

?>