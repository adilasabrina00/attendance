<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Report Page</title>
<link rel="stylesheet" href="../inc/style.css">
</head>
<body style="background-color:#00ff84"><br>

<head>
    <div id="main-wrapper">
	    <center>
	        <h2>Report</h2>
        </center>
<style>

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 13px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius:10px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #B0B3D6;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body>
	
	<center>
	    <div class="dropdown">
        <button class="dropbtn">Months</button>
        <div class="dropdown-content">
        <a href="#">January</a>
        <a href="#">February</a>
        <a href="#">March</a>
		<a href="#">April</a>
        <a href="#">May</a>
        <a href="#">June</a>
		<a href="#">July</a>
        <a href="#">August</a>
        <a href="#">September</a>
		<a href="#">October</a>
        <a href="#">November</a>
        <a href="#">December</a>
        </div>
    </div>
    
		
	    <div class="dropdown">
        <button class="dropbtn">Years</button>
        <div class="dropdown-content">
        <a href="#">2020</a>
        <a href="#">2021</a>
        <a href="#">2022</a>
		<a href="#">2023</a>
        <a href="#">2024</a>
        <a href="#">2025</a>
		<a href="#">2026</a>
        <a href="#">2027</a>
        <a href="#">2028</a>
		<a href="#">2029</a>
        <a href="#">2030</a>
        </div>
    </div>
	</center>

	    <form action="check_in.php" method="post">
			<input type="submit" id="back_btn" value="Back"/>
	    </form>
			    
	    <form action="../" method="post">
        <input type="submit" id="report_btn" value="Logout"/><br>
	    </form>
		
	</div>
</body>

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