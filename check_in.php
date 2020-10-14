<?php
    session_start();
    require 'dbconfig/config.php';
    $id = $_SESSION['id'];
    $tarikh = date('Y-m-d');
    $sql = "SELECT * FROM fileupload_db 
        LEFT JOIN tbl_touch ON fileupload_db.id = tbl_touch.id_staff
        WHERE id = $id AND DATE(touch_in) = '$tarikh'";
    $row = $con->query($sql)->fetch_object();
?>
<!DOCTYPE html>
<html>
<head>
<title>Check-In Page</title>
<link rel="stylesheet" href="css/style.css"> 
</head>
<body style="background-color: #00ff84"><br>

    <div id="main-wrapper">
	    <center>
	        <h2>Check-In Page</h2>
            <?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'"/>';?><br>
            <h3>Name: 
			   <?php echo $_SESSION['fullname'] ?>
			</h3>
            <h3>Staff No: 
			   <?php echo $_SESSION['staffNo'] ?>
			</h3>
            <h3>IC No: 
			   <?php echo $_SESSION['ICno'] ?>
			</h3>
        </center>
	
<head>
<style>
   
table, th, td {
  border: 0.5px solid black;
}

table {
  border-collapse: collapse;
  width: 75%;
}

th {
  height: 20px;
}

td {
	height: 20px;
}
</style>
</head>
<body>
<center>

<table>
  <tr>
    <th>Touch In</th>
    <th>Touch Out</th>
  </tr>
  <tr>
    <td><?php echo $row->touch_in; ?></td>
    <td><?php echo $row->touch_out; ?></td>
  </tr>
</table>
</center>
</body>
</html>

<head>
        <title>Font Awesome Icons</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<p></p>
    <center>
        <button onclick="window.location='record_data_in.php';" style="font-size:28px"><i class="fa fa-wifi"></i> </button>
        
        <button onclick="window.location='record_data_out.php';" style="font-size:28px"><i class="fa fa-wifi"></i> </button>
    </center>
</body> 
	
	    <form action="report.php" method="post"><br>
			<center><input type="submit" id="report_btn" value="Report"/>
	    </form>

        <?php 
		    if(isset($_POST['report']))
			{
				session_destroy();
			    header('location:report.php');
			}
		?>

	</div>

<style>
/* Footer */
.footer {
  padding: 10px;
  text-align: center;
  background: #c2c2a3;
}
</style>

<div class="footer">
<center>&copy;2020 Politeknik Tuanku Syed Sirajuddin(PTSS),All rights reserved Developed by FRP </center>
</div>
    
</body>
</html>