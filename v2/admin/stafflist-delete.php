<?php
require '../inc/conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbl_touch WHERE id_staff = $id";
$con->query($sql);

$sql = "SELECT * FROM fileupload_db WHERE id = $id";
$row = $con->query($sql)->fetch_assoc();
$imglink = $row['imglink'];
unlink("../$imglink");

$sql = "DELETE FROM fileupload_db WHERE id = $id";
$con->query($sql);

header('location: index.php?menu=stafflist');
