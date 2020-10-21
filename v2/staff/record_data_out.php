<?php
require '../inc/conn.php';

$id = $_SESSION['id'];

$touch_out = date("Y-m-d H:i:s");
$touch_date = date("Y-m-d");

$query = "SELECT * from tbl_touch WHERE DATE(touch_in)='$touch_date'";
$query_run = mysqli_query($con, $query);

if (mysqli_num_rows($query_run) > 0) {
    $row = mysqli_fetch_assoc($query_run);
    $id_touch = $row['id_touch'];
    $query = "UPDATE tbl_touch SET touch_out='$touch_out' WHERE id_touch= '$id_touch'";
} else {
    $query = "INSERT INTO tbl_touch (id_staff,touch_out) VALUES('$id','$touch_out')";
}
mysqli_query($con, $query);
header('location: index.php?menu=check_in');
