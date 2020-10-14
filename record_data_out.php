<?php
    require "dbconfig/config.php";
    session_start();

$id = $_SESSION['id'];

$touch_out = date("Y-m-d h:i:s");
$touch_date = date("Y-m-d"); 

$query= "SELECT * from tbl_touch WHERE DATE(touch_in)='$touch_date'";

$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{
  $row = mysqli_fetch_assoc($query_run); 
  $id_touch= $row['id_touch'];
  $query= "UPDATE tbl_touch SET touch_out='$touch_out'";
}
else
{
  $query= "INSERT INTO tbl_touch (touch_out) VALUES('$touch_out')";
}
mysqli_query($con,$query);
    //echo $query;
