<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css"> 
</head>
<body style="background-color:#00ff84">

    <form class="myform" action="login.php" method="post" enctype= "multipart/form-data"><br>
    <div id="main-wrapper">
	    <center>
	        <h2>Staff Login</h2>
	        <img src="Staff.png" class="avatar"/><br>
        </center>
	
		    <label><b>Staff No:</b></label>
		    <input name="staffNo" type="text" class="inputvalues" placeholder="Enter Staff No" /><br>
		    <label><b>Password:</b></label>
		    <input name="password" type="password" class="inputvalues" placeholder="Type your Password"/><br>
			<center><input name="login" type="submit" id="login_btn" value="Login"/><br></center>
			   <div class="container signin">
                  <p>First time user ? <a href="register.php">Register</a>.</p>
               </div>
    </form>
		<?php
		if(isset($_POST['login']))
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
  padding: 20px;
  text-align: center;
  background: #ddd;
}
</style>

<div class="footer">
<center>&copy;2020 Politeknik Tuanku Syed Sirajuddin(PTSS),All rights reserved Developed by FRP </center>
</div>
   
</body>
</html>
	