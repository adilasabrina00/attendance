<!DOCTYPE html>
<html>
<head>
<title>Contact Us Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
    
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 40px;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 20px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 4px;
}    
    
.about-section {
padding: 50px;
text-align: center;
background-color: #00cc69;
color: white;
font-size: 18px;
}
    
.container {
  padding: 0 20px;
}
    
.btn {
  border: 2px solid black;
  border-radius: 5px;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Blue */
.submit {
  border-color: #2196F3;
  color: dodgerblue
}

.submit:hover {
  background: #2196F3;
  color: white;
}

</style>
</head>
<body>

<div class="about-section">
  <h1>Contact Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<div class="navbar">
  <a href="main.php" >Home</a>
  <a href="about_us.php" >About Us</a>
  <a href="contact_us.php" class="active">Contact Us </a>
  <a href="register.php" class="right">Register</a>
</div>

<h2 style="text-align:center">Contact Us</h2>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="phonenumber">Phone Number</label>
      <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number..">
    
     
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button class="btn submit">Submit</button><br>
    </form>
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
