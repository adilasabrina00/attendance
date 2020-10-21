<?php
require '../inc/conn.php';

if (!isset($_SESSION['id'])) header('location: ../logout.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM fileupload_db WHERE id = $id";
$row = $con->query($sql)->fetch_assoc();
$stafinfo = 'Name: '.$row['fullname'] . ' :: Staff No: ' . $row['staffNo'];

$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'check_in';
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
</head>
<body>

<div class="header">
    <h1>SK PAUH STAFF ATTENDANCE SYSTEM</h1>
</div>

<div class="navbar">
    <a href="index.php?menu=check_in"<?php active_menu($menu, 'check_in'); ?>>Check In</a>
    <a href="index.php?menu=report"<?php active_menu($menu, 'report'); ?>>Report</a>
    <a href="../logout.php" class="right">Logout</a>
</div>

<div class="row">
    <div class="main">

        <?php require "$menu.php"; ?>

    </div>
</div>

<div class="footer">
    <strong><?php echo $stafinfo; ?></strong><br>
    &copy; 2020 Politeknik Tuanku Syed Sirajuddin (PTSS),
    All rights reserved Developed by FRP
</div>

</body>
</html>
