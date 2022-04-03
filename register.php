<?php
    include("config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Register</title>
</head>
<body>
    <?php
        if(isset($_SESSION['activeSession'])){
            if($_SESSION['activeSession']=="tidak"){
                echo '<script>alert("Silahkan cek kembali pastikan password1 dan password2 sama, semua inputan sesuai dengan datanya, dan pastikan hanya mengupload file foto berekstensi .jpg dan .png");</script>';
                $_SESSION['activeSession'] = "aktif";
            }
        }
    ?>
    <div class="container-register">
        <div class="header-register">
            <p>Register</p>
        </div>
        <div class="main-register">
            <form action="registerProcess.php" method="post" enctype="multipart/form-data">
            <div class="wrapper-part">
                <div class="part-1">
                    <div class="data-part">
                        <label for="namadepan">Nama Depan</label>
                        <input type="text" name="namadepan" id="namadepan" placeholder="Nama Depan" required>
                    </div>
                    <div class="data-part">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="data-part">
                        <label for="warganegara">Warga Negara</label>
                        <input type="text" name="warganegara" id="warganegara" placeholder="Warga Negara" required>
                    </div>
                    <div class="data-part-alamat">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="data-part">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="part-2">
                    <div class="data-part">
                        <label for="namatengah">Nama Tengah</label>
                        <input type="text" name="namatengah" id="namatengah" placeholder="Nama Tengah" required>
                    </div>
                    <div class="data-part">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" name="tgllahir" id="tgllahir" required>
                    </div>
                    <div class="data-part">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="data-part">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" name="kodepos" id="kodepos" placeholder="Kode Pos" required>
                    </div>
                    <div class="data-part">
                        <label for="password1">Password 1</label>
                        <input type="password" name="password1" id="password1" placeholder="Password1" required>
                    </div>
                </div>
                <div class="part-3">
                    <div class="data-part">
                        <label for="namabelakang">Nama Belakang</label>
                        <input type="text" name="namabelakang" id="namabelakang" placeholder="Nama Belakang" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" placeholder="NIK" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="nohp">No HP</label>
                        <input type="phone" name="nohp" id="nohp" placeholder="No HP" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="fotoprofil">Foto Profil (hanya ekstensi .jpg dan .png) </label>
                        <input type="file" name="fotoprofil" accept="image/*" required>
                        <br>
                    </div>
                    <div class="data-part">
                        <label for="password2">Password 2</label>
                        <input type="password" name="password2" id="password2" placeholder="Password2" required>
                        <br>
                    </div>
                </div>
            </div>
        
                <!-- untuk tombol  -->
            <div class="button-form">
                <button class="btn-kembali-register"><a href="index.php">Kembali</a></button>
                <button class="btn-register-register" type="submit" name="submit" >Register</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>