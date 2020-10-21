<?php
require '../inc/conn.php';

$id = $_SESSION['id'];

$touch_in = date("Y-m-d H:i:s");
$touch_date = date("Y-m-d");

$query = "SELECT * from tbl_touch WHERE DATE(touch_in)='$touch_date' AND id_staff='$id'";
$query_run = mysqli_query($con, $query);

if (mysqli_num_rows($query_run) > 0) {
    $row = mysqli_fetch_assoc($query_run);
    $id_touch = $row['id_touch'];
    $query = "UPDATE tbl_touch SET touch_in='$touch_in' WHERE id_touch= '$id_touch' ";
} else {
    $query = "INSERT INTO tbl_touch (id_staff,touch_in) VALUES('$id','$touch_in')";
}
mysqli_query($con, $query);
header('location: index.php?menu=check_in');
