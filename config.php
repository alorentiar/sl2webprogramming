<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "dbkeuangan";
    $niktoedit ="";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        echo "<script>console.log('Koneksi berhasil');</script>";
    }else{
        echo "<script>console.log('Koneksi gagal ".mysqli_connect_error()."');</script>";
    }


?>