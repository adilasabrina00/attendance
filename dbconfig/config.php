<?php 
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'logindb');
date_default_timezone_set('Asia/Kuala_Lumpur');
