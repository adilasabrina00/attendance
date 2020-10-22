<?php
require '../inc/conn.php';
if (!isset($_SESSION['admin'])) header('location: ../logout.php');

$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'by_date';
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
    <link rel="stylesheet" href="../inc/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../inc/jquery-3.5.1.min.js"></script>
</head>
<body>

<div class="header">
    <h1>SK PAUH STAFF ATTENDANCE SYSTEM</h1>
</div>

<div class="navbar">
    <a href="index.php?menu=stafflist"<?php active_menu($menu, 'stafflist'); ?>>Staff List</a>
    <a href="index.php?menu=by_date"<?php active_menu($menu, 'by_date'); ?>>Report By Date</a>
    <a href="index.php?menu=individual"<?php active_menu($menu, 'individual'); ?>>Report By Individual</a>
    <a href="../logout.php" class="right">Logout</a>
    <a href="index.php?menu=password" class="right">Change Password</a>
</div>

<div class="row">
    <div class="main">

        <?php require "$menu.php"; ?>

    </div>
</div>

<div class="footer">
    <strong>SYSTEM ADMINISTRATOR</strong><br>
    &copy; 2020 Politeknik Tuanku Syed Sirajuddin (PTSS),
    All rights reserved Developed by FRP
</div>

</body>
</html>
