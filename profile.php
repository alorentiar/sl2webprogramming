<?php
    include("config.php");

    session_start();

    // if(isset($_SESSION['updated'])){
    // if($_SESSION['updated']){
    //         $nikIdentifier = $niktoedit;
    //         $str_query = "SELECT * FROM msnasabah WHERE nik = '".$nikIdentifier."'";
    //         $querysukses = mysqli_query($connection,$str_query);
    //         $dataProfile = mysqli_fetch_array($querysukses);

    //         $_SESSION['namadepanSession'] = $dataProfile['namadepan'];
    //         $_SESSION['namatengahSession'] = $dataProfile['namatengah'];
    //         $_SESSION['namabelakangSession'] =$dataProfile['namabelakang'];
    //         $_SESSION['tempatlahirSession'] = $dataProfile['tempatlahir'];
    //         $_SESSION['tgllahirSession'] =$dataProfile['tanggallahir'];
    //         $_SESSION['nikSession'] = $dataProfile['nik'];
    //         $_SESSION['warganegaraSession'] = $dataProfile['warganegara'];
    //         $_SESSION['emailSession'] = $dataProfile['email'];
    //         $_SESSION['nohpSession'] = $dataProfile['nohp'];
    //         $_SESSION['alamatSession'] = $dataProfile['alamat'];
    //         $_SESSION['kodeposSession'] = $dataProfile['kodepos'];
    //         $_SESSION['usernameSession'] = $dataProfile['username'];
    //         $_SESSION['password1Session'] = $dataProfile['password'];
    //         $_SESSION['image'] = $dataProfile['photo'];

    //         $_SESSION['updated'] = false;
    // }}


    // // if(isset($_SESSION['nik'])){
    // //         $nikIdentifier = $_SESSION['nik'];
    // //         $str_query = "SELECT * FROM msnasabah WHERE nik = '".$nikIdentifier."'";
    // //         $querysukses = mysqli_query($connection,$str_query);
    // //         $dataProfile = mysqli_fetch_array($querysukses);

    // //         $_SESSION['namadepanSession'] = $dataLogin['namadepan'];
    // //         $_SESSION['namatengahSession'] = $dataLogin['namatengah'];
    // //         $_SESSION['namabelakangSession'] =$dataLogin['namabelakang'];
    // //         $_SESSION['tempatlahirSession'] = $dataLogin['tempatlahir'];
    // //         $_SESSION['tgllahirSession'] =$dataLogin['tanggallahir'];
    // //         $_SESSION['nikSession'] = $dataLogin['nik'];
    // //         $_SESSION['warganegaraSession'] = $dataLogin['warganegara'];
    // //         $_SESSION['emailSession'] = $dataLogin['email'];
    // //         $_SESSION['nohpSession'] = $dataLogin['nohp'];
    // //         $_SESSION['alamatSession'] = $dataLogin['alamat'];
    // //         $_SESSION['kodeposSession'] = $dataLogin['kodepos'];
    // //         $_SESSION['usernameSession'] = $dataLogin['username'];
    // //         $_SESSION['password1Session'] = $dataLogin['password'];
    // //         $_SESSION['image'] = $dataLogin['photo'];

    // //         $_SESSION['updated'] = false;

    // // }


    //     if(isset($_GET['nik'])){
    //         $nikIdentifier = $_GET['nik'];
    //         $str_query = "SELECT * FROM msnasabah WHERE nik = '".$nikIdentifier."'";
    //         $querysukses = mysqli_query($connection,$str_query);
    //         $dataProfile = mysqli_fetch_array($querysukses);

    //         if(isset($_SESSION['updated'])){
    //              //buat bikin session agar tidak bingung
    //              $_SESSION['namadepanSession'] = $dataProfile['namadepan'];
    //              $_SESSION['namatengahSession'] = $dataProfile['namatengah'];
    //              $_SESSION['namabelakangSession'] =$dataProfile['namabelakang'];
    //              $_SESSION['tempatlahirSession'] = $dataProfilen['tempatlahir'];
    //              $_SESSION['tgllahirSession'] =$dataProfile['tanggallahir'];
    //              $_SESSION['nikSession'] = $dataProfile['nik'];
    //              $_SESSION['warganegaraSession'] = $dataProfile['warganegara'];
    //              $_SESSION['emailSession'] = $dataProfile['email'];
    //              $_SESSION['nohpSession'] = $dataProfile['nohp'];
    //              $_SESSION['alamatSession'] = $dataProfile['alamat'];
    //              $_SESSION['kodeposSession'] = $dataProfile['kodepos'];
    //              $_SESSION['usernameSession'] = $dataProfile['username'];
    //              $_SESSION['password1Session'] = $dataProfile['password'];
    //              $_SESSION['image'] = $dataProfile['photo'];
     
    //              $_SESSION['updated'] = false;
    //         }
    //     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Profile</title>
</head>
<body>
<div class="wrapper-all">
    <div class="navbar">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <div class="home-profile-menu">
            <a href="home.php" class="nav-home-profile">Home</a>
            <a href="profile.php" class="nav-profile-profile" >Profile</a>
        </div>
        <a href="logout.php" class="nav-logout">Logout</a>
    </div>
    <div class="container-profil-profil">
        <h2>Profil Pribadi</h2>
        <div class="container-profile-tampilan">
            <div class="part1-profile">
                <div class="specific-part">
                    <p>Nama Depan : <b><?php echo $_SESSION['namadepanSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Tempat Lahir : <b><?php echo $_SESSION['tempatlahirSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Warga Negara : <b><?php echo $_SESSION['warganegaraSession']; ?></b></p>
                    <br>
                </div>  
                <div class="specific-part">
                    <p>Alamat : <b><?php echo $_SESSION['alamatSession']; ?></b></p>
                    <br>
                </div>  
            </div>

            <div class="part2-profile">
                <div class="specific-part">
                    <p> Nama Tengah : <b><?php echo $_SESSION['namatengahSession']; ?></b> </p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Tgl Lahir : <b><?php echo date('d-m-Y',strtotime($_SESSION['tgllahirSession'])); ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Email : <b><?php echo $_SESSION['emailSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Kode Pos : <b><?php echo $_SESSION['kodeposSession']; ?></b></p>
                    <br>
                </div>
            </div>
            
            <div class="part3-profile">
                <div class="specific-part">
                    <p>Nama Belakang : <b><?php echo $_SESSION['namabelakangSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>NIK : <b><?php echo $_SESSION['nikSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>NoHP : <b><?php echo $_SESSION['nohpSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part-photo">
                    <p>Foto Profil : </p>
                    <?php
                        $str_query = "SELECT * FROM msnasabah WHERE nik='".$_SESSION['nikSession']."'";

                        $query = mysqli_query($connection, $str_query);

                        $data = mysqli_fetch_array($query);

                        echo "<img src='data:".$data['tipephoto'].";base64,".base64_encode($data['photo'])."' width='50px' height='50px'>";
                        
                    ?>

                </div>
            </div>
        </div>
        <div>
            <button class="btn-kembali-register"><a href=<?php echo '"editProfile.php?nik='.base64_encode($_SESSION['nikSession']).'">'?>Edit Profil</a></button>
        </div>
    </div>
    </div>
</body>
</html>