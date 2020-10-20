<?php
require 'inc/conn.php';

$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'home';
if (!file_exists("$menu.php")) exit;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance System</title>
    <link rel="stylesheet" href="inc/style.css">
</head>
<body>

<div class="header">
    <img alt="" src="imgs/sk_pauh.png" class="avatar"/>
    <h1>SK PAUH STAFF ATTENDANCE SYSTEM</h1>
</div>

<div class="navbar">
    <a href="index.php?menu=home"<?php active_menu($menu, 'home'); ?>>Home</a>
    <a href="index.php?menu=about_us"<?php active_menu($menu, 'about_us'); ?>>About Us</a>
    <a href="index.php?menu=contact_us"<?php active_menu($menu, 'contact_us'); ?>>Contact Us</a>
    <a href="index.php?menu=register" class="right">Register</a>
</div>

<div class="row">
    <div class="main">

        <?php require "$menu.php"; ?>

    </div>
</div>

<div class="footer">
    &copy; 2020 Politeknik Tuanku Syed Sirajuddin (PTSS),
    All rights reserved Developed by FRP
</div>

</body>
</html>
