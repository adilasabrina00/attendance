<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
<link rel="stylesheet" href="css/style.css"> 
</head>
<body style="background-color:#00ff84">

    <form class="myform" action="confirmation.php" method="post"><br>
    <div id="main-wrapper">
	    <center>
	        <h2>Confirmation Page</h2>
		    <?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'"/>';?>
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
	
            <center><input name="verify" type="submit" id="verify_btn" value="Verify"/></center>
	    </form>
        
        <?php
		if(isset($_POST['verify']))
		{
			$staffNo=$_POST['staffNo'];
			$password=$_POST['password'];
			
			$query= "select * from fileupload_db WHERE staffNo='$staffNo' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				// valid
                $_SESSION['id']= $row['id'];
                $_SESSION['imglink']= $row['imglink'];
				$_SESSION['fullname']= $row['fullname'];
				$_SESSION['staffNo']= $row['staffNo'];
				$_SESSION['ICno']= $row['ICno'];
				header('location:check_in.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
		}
		
		?>
	</div>

<style>
    
/* Footer */
.footer {
  padding: 10px;
  width: auto;
  text-align: center;
  background: #c2c2a3;
}


</style>

<div class="footer">
<center>&copy;2020 Politeknik Tuanku Syed Sirajuddin(PTSS),All rights reserved Developed by FRP </center>
</div>

</body> 
</html>