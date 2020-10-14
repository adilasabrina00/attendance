<?php
    require "dbconfig/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" href="css/style.css"> 

<script type="text/javascript">

    function PreviewImage() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
		
		oFReader.onload = function (oFREvent) {
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		};
	};
	
</script>
</head>
<body style="background-color:#00ff84">

    <form class="myform" action="register.php" method="post" enctype= "multipart/form-data"><br>
        <div id="main-wrapper">
	    <center>
	        <h2>Register Form</h2>
	        <img id="uploadPreview" src="imgs/avatar.png" class="avatar"/><br>
			<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
        </center>
	
	
	        <label><b>Full Name:</b></label><br>
		     <input name="fullname" type="text" class="inputvalues" placeholder="Enter Full Name"/><br>
			<label><b>Staff No:</b></label><br>
		     <input name="staffNo" type="text" class="inputvalues" placeholder="Enter Staff No"/><br>
	        <label><b>IC No:</b></label><br>
		     <input name="ICno" type="text" class="inputvalues" placeholder="Enter IC No"/><br>
		    <label><b>Password:</b></label><br>
		     <input name="password" type="password" class="inputvalues" placeholder="Enter Password"/><br>
			<label><b>Comfirm Password:</b></label><br>
			 <input name="cpassword" type="password" class="inputvalues" placeholder="Enter Confirm Password"/><br>  
             <center><input name="register_btn" type="submit" id="register_btn" value="Register"/><br></center>
			   <div class="container signin">
                  <p>Already have account ? <a href="login.php">Login</a>.</p>
               </div>
	    </form>
		
		<?php
		    if(isset($_POST['register_btn']))
			{
				
				$fullname = $_POST['fullname'];
				$staffNo = $_POST['staffNo'];
				$ICno = $_POST['ICno'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				
				$img_name = $_FILES['imglink']['name'];
				$img_size = $_FILES['imglink']['size'];
				$img_tmp = $_FILES['imglink']['tmp_name'];
				
				$directory = 'uploads/';
				$target_file = $directory.$img_name;
				
				if($password==$cpassword)
				{
					
					$query= "select * from fileupload_db WHERE staffNo='staffNo'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same Staff No
						echo '<script type="text/javascript"> alert("User already exists.. try another Staff No") </script>';
					}
				    else if(file_exists($target_file))
				    {
						echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file") </script>';
					}
					
					else if($img_size>2097152)
				    {
						echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
					}
					
					else
					{
						move_uploaded_file($img_tmp,$target_file);
						$query= "insert into fileupload_db values('', '$fullname', '$staffNo','$ICno', '$password', '$target_file')";
					    $query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}
					

				}
				else 
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
				}
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