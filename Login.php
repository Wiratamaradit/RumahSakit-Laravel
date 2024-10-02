<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location: Home.php");
}
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<title>
    TUGAS PERTEMUAN 12
</title>
<style>

</style>

<body class="main-body">
    <div class="container-login">
        <h1 class="text-login-h1">Selamat Datang</h1>
        <div style="color: red;margin-bottom: 15px;">
            <?php

            if (isset($_COOKIE["message"])) {
                echo $_COOKIE["message"];
            }
            ?>
        </div>

        <form class="form-input-login" method="post" action="Home.php">
            <label class="label-login">Username :</label><br>
            <input type="text" name="username" placeholder="Username"><br><br>
            <label class="label-login">Password :</label><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button class="form-button-login" type="submit">Sign In</button>
        </form>
    </div>
</body>

</html>