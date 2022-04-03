<?php
    include("config.php");

    session_start();

    if(isset($_SESSION['nik'])){
        $nikIdentifier = $_SESSION['nik'];
        $str_query = "SELECT * FROM msnasabah WHERE nik = '".$nikIdentifier."'";
        $querysukses = mysqli_query($connection,$str_query);
        $dataProfile = mysqli_fetch_array($querysukses);

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

        $_SESSION['updated'] = false;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Home</title>
</head>
<body>
    <?php
        if(isset($_SESSION['loginSession'])){
            if($_SESSION['loginSession'] =="benar"){
                echo '<script>alert("Login Sukses");</script>';
                $_SESSION['loginSession'] = "salah";
            }
        }
    ?>
    <div class="navbar">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <div class="home-profile-menu">
            <a href="home.php" class="nav-home">Home</a>
            <a href="profile.php" class="nav-profile">Profile</a>
        </div>
        <a href="logout.php" class="nav-logout">Logout</a>
    </div>
    <div class="container-home">
        <p>Halo <b> <?php echo $_SESSION['namadepanSession']." ".$_SESSION['namatengahSession']." ".$_SESSION['namabelakangSession']; ?> </b>, Selamat datang di Aplikasi Pengelolaan Keuangan</p>
    </div>
</body>
</html>