<script type="text/javascript">

    function PreviewImage() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
		
		oFReader.onload = function (oFREvent) {
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		};
	};
	
</script>

    <form class="myform" action="register-save.php" method="post" enctype= "multipart/form-data"><br>
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
                  <p>Already have account ? <a href="index.php?menu=login">Login</a>.</p>
               </div>
	    </form>
		
		<?php

		?>
	</div>
