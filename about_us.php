<!DOCTYPE html>
<html>
<head>
<title>About Us Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
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
}

.container {
  padding: 0 20px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  border-radius: 5px;
  color: black;
  border-color: #1a66ff;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #6699ff;
  color: white;
  
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    
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
  padding: 14px 20px;
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

</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<div class="navbar">
  <a href="main.php" >Home</a>
  <a href="about_us.php" class="active">About Us</a>
  <a href="contact_us.php">Contact Us</a>
  <a href="register.php" class="right">Register</a>
</div>
    
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card"><br>
      <center><img src="PN.%20DIANA.jpeg" alt="Diana" style="width:50%"></center>
      <div class="container">
        <h2>Siti Nurdiana</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>diana_usim@yahoo.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card"><br>
      <center><img src="BIHAH.jpeg" alt="Bihah" style="width:55%"></center>
      <div class="container">
        <h2>Fatin Nabihah</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>fatinn2305@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card"><br>
      <center><img src="RINNA.jpeg" alt="Rinna" style="width:55%"></center>
      <div class="container">
        <h2>Rinna Fazira</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>rinnafazira@yahoo.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card"><br>
      <center><img src="PRRIYA.jpeg" alt="Prriya" style="width:55%"></center>
      <div class="container">
        <h2>NavanithaPrriya</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>navanithaprriya03@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
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
