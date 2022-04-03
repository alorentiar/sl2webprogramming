<?php
    include("config.php");

    session_start();

    if(isset($_GET['nik'])){
        $nikIdentifier = base64_decode($_GET['nik']);
        $str_query = "SELECT * FROM msnasabah WHERE nik = '".$nikIdentifier."'";
        $querysukses = mysqli_query($connection,$str_query);
        $dataProfile = mysqli_fetch_array($querysukses);
    }

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
        <h2>Edit Profil Pribadi</h2>
        <div class="container-profile-tampilan">
        <form action="processEditProfile.php" method="post" enctype="multipart/form-data">
            <div class="wrapper-part">
                <div class="part-1">
                    <div class="data-part">
                        <label for="namadepan">Nama Depan</label>
                        <input type="text" value="<?php echo $_SESSION['namadepanSession'] ?>" name="namadepan" id="namadepan" placeholder="Nama Depan" required>
                    </div>
                    <div class="data-part">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" value="<?php echo $_SESSION['tempatlahirSession'] ?>" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="data-part">
                        <label for="warganegara">Warga Negara</label>
                        <input type="text" value="<?php echo $_SESSION['warganegaraSession'] ?>" name="warganegara" id="warganegara" placeholder="Warga Negara" required>
                    </div>
                    <div class="data-part-alamat">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" " id="alamat" required><?php echo $_SESSION['alamatSession'] ?></textarea>
                    </div>
                    <div class="data-part">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $_SESSION['usernameSession'] ?>" id="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="part-2">
                    <div class="data-part">
                        <label for="namatengah">Nama Tengah</label>
                        <input type="text" value="<?php echo $_SESSION['namatengahSession'] ?>" name="namatengah" id="namatengah" placeholder="Nama Tengah" required>
                    </div>
                    <div class="data-part">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" value="<?php echo $_SESSION['tgllahirSession'] ?>" name="tgllahir" id="tgllahir" required>
                    </div>
                    <div class="data-part">
                        <label for="email">Email</label>
                        <input type="email" value="<?php echo $_SESSION['emailSession'] ?>" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="data-part">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" value="<?php echo $_SESSION['kodeposSession'] ?>" name="kodepos" id="kodepos" placeholder="Kode Pos" required>
                    </div>
                    <div class="data-part">
                        <label for="password1">Password 1</label>
                        <input type="password" value="<?php echo $_SESSION['password1Session'] ?>" name="password1" id="password1" placeholder="Password1" required>
                    </div>
                </div>
                <div class="part-3">
                    <div class="data-part">
                        <label for="namabelakang">Nama Belakang</label>
                        <input type="text" name="namabelakang" value="<?php echo $_SESSION['namabelakangSession'] ?>" id="namabelakang" placeholder="Nama Belakang" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" value="<?php echo $_SESSION['nikSession'] ?>" id="nik" value="<?php echo $dataProfile['nik'] ?>" required readonly>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="nohp">No HP</label>
                        <input type="phone" name="nohp" value="<?php echo $_SESSION['nohpSession'] ?>" id="nohp" placeholder="No HP" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="fotoprofil">Foto Profil (hanya ekstensi .jpg dan .png) jika tidak diubah, upload foto yang sama (WAJIB) </label>
                        <input type="file" name="fotoprofil" accept="image/*" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="password2">Password 2</label>
                        <input type="password" value="<?php echo $_SESSION['password1Session'] ?>" name="password2" id="password2" placeholder="Password2" required>
                        <br>
                    </div>
                </div>
            </div>
        
                <!-- untuk tombol  -->
            <div class="button-form">
                <button class="btn-kembali-register"><a href="profile.php">Kembali</a></button>
                <button class="btn-register-register" type="submit" name="submit" >Simpan</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</body>
</html>