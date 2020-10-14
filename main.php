<!DOCTYPE html>
<html lang="en">
<head>
<title>Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: #00cc69;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 60px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 16px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 10px;
  text-align: center;
  background: #c2c2a3;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <img src="imgs/sk_pauh.png" class="avatar" style="width:250px;height:240px;"/>
  <h1>SK PAUH STAFF ATTENDANCE SYSTEM</h1>
  <p>A <b>responsive</b> website created by FRP.</p>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="about_us.php">About Us</a>
  <a href="contact_us.php">Contact Us</a>
  <a href="register.php" class="right">Register</a>
</div>

<div class="row">
  <div class="main">
    
<style>
.btn {
  border: 2px solid black;
  border-radius: 5px;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 18px;
  cursor: pointer;
}

/* Orange */
.admin {
  border-color: #ff9800;
  color: orange;
}

.admin:hover {
  background-color: #ff9800;
  color: white;
}

/* Green */
.staff {
  border-color: #00cc69;
  color: #00cc69;
}

.staff:hover {
  background: #00cc69;
  color: white;
}
</style>
      
      <form action=".php" method="post">
          <center><button class="btn admin">Admin Login</button></center><br>
      </form>
      
      <form action="login.php" method="post">
          <center><button class="btn staff">Staff Login</button></center>
      </form>
      
  </div>
</div>

<div class="footer">
<center>&copy;2020 Politeknik Tuanku Syed Sirajuddin(PTSS),All rights reserved Developed by FRP </center>
</div>

</body>
</html>