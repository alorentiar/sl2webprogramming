<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Welcome</title>
</head>
<body>
    <?php
    include("config.php");

    ?>
    <div class="container-index">
        <div class="header-index">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="main-text">
            <p>Selamat datang di Aplikasi Pengelolaan Keuangan</p>
            <?php
                // buat ngecek aja datanya masuk apa engga

            //     $str_query = "SELECT * FROM msnasabah";

            //     $query = mysqli_query($connection, $str_query);

            //     while($data = mysqli_fetch_array($query)){
            //         echo "<p>Nama : ".$data['namadepan']."</p>";
            //         $image = $data['photo'];
            //         echo "<img src='$image' width='50px' height='50px'>";
            //     }
            // ?>
        </div>
        <div class="tombol">
            <button class="tbl-login"><a href="login.php">Login</a></button>
            <button class="tbl-register"><a href="register.php">Register</a></button>
        </div>
    </div>
</body>
</html>