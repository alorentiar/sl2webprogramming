<?php

session_start();

$_SESSION['loginSession'] = "benar";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION['loginSession'])){
            if($_SESSION['loginSession']=="salah"){
                echo '<script>alert("Login Gagal");</script>';
                $_SESSION['loginSession'] = "benar";
            }
}
    ?>
    <div class="container-login">
        <div class="header-login">
            <p>Login</p>
        </div>
        <div class="main-login">
            <form action="loginProcess.php" method="post" class="main-login-form">
            <div class="login-wrapper">
                <div class="user-pass-login">
                    <div class="user-login">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div class="pass-login">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="login-button">
                    <button type="submit" name="submit" class="login-button-btn"><p>Login</p></button>
                    <button class="kembali-button-btn"><a href="index.php">Kembali</a></button>
                </div>
            </div>
            </form>
        </div>
    </div>

</body>
</html>