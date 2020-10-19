<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: url(background_4.jpg)">

<form class="myform" action="admin_login.php" method="post" enctype="multipart/form-data"><br>
    <br><br><br><br><br><br>
    <div id="main-wrapper">
        <center>
            <h2>Admin Login</h2>
            <img src="Admin.png" class="avatar"/><br>

        </center>

        <label><b>Password:</b></label>
        <input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/><br>
        <p>
        <center><input name="login" type="submit" id="login_btn" value="Login"/><br></center>
        </p>
</form>

<?php
if (isset($_POST['login'])) {
    $password = $_POST['password'];

    $query = "select * from admin_db WHERE password='$password'";

    $query_run = mysqli_query($con, $query);
    echo $con->error;
    if (mysqli_num_rows($query_run) == 0) {
        // invalid
        echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
    } else {
        ?>
        <script>
            window.location = 'view_report.php';
        </script>
        <?php
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

<br><br><br><br><br>
<p>
<div class="footer">
    &copy;2020 Politeknik Tuanku Syed Sirajuddin(PTSS),All rights reserved Developed by FRP
</div>
</p>

</body>
</html>