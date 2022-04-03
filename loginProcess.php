<?php

include("config.php");

session_start();
$_SESSION['loginSession'] = true;


if(isset($_POST['submit'])){
    //assign biasa
    $u = $_POST['username'];
    $p = $_POST['password'];

    $str_query = "SELECT * FROM msnasabah WHERE username = '".$u."'";
    
    $querysukses = mysqli_query($connection, $str_query);

    if($querysukses){
        $dataLogin = mysqli_fetch_array($querysukses);

        if(!$dataLogin){
            echo "<script>";
            echo "alert('Tidak terdapat record pada database, silahkan register dahulu');";
            echo 'window.location.href = "login.php";';
            echo "</script>";
        }else if(($dataLogin['username'] ==  $u) && ($dataLogin['password'] != $p)){
            echo "<script>";
            echo "alert('Password anda salah, silahkan diingat kembali :)');";
            echo 'window.location.href = "login.php";';
            echo "</script>";
        }else{
             //buat bikin session agar tidak bingung
            $_SESSION['namadepanSession'] = $dataLogin['namadepan'];
            $_SESSION['namatengahSession'] = $dataLogin['namatengah'];
            $_SESSION['namabelakangSession'] =$dataLogin['namabelakang'];
            $_SESSION['tempatlahirSession'] = $dataLogin['tempatlahir'];
            $_SESSION['tgllahirSession'] =$dataLogin['tanggallahir'];
            $_SESSION['nikSession'] = $dataLogin['nik'];
            $_SESSION['warganegaraSession'] = $dataLogin['warganegara'];
            $_SESSION['emailSession'] = $dataLogin['email'];
            $_SESSION['nohpSession'] = $dataLogin['nohp'];
            $_SESSION['alamatSession'] = $dataLogin['alamat'];
            $_SESSION['kodeposSession'] = $dataLogin['kodepos'];
            $_SESSION['usernameSession'] = $dataLogin['username'];
            $_SESSION['password1Session'] = $dataLogin['password'];
            $_SESSION['image'] = $dataLogin['photo'];

            echo "<script>";
            echo "alert('Login berhasil');";
            echo 'window.location.href = "home.php"';
            echo "</script>";
        }
    }else{
        echo "<script>";
        echo "alert('Gagal input database');";
        echo 'window.location.href = "register.php";';
        echo "</script>";
    }

}

?>