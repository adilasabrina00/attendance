<form class="myform" action="login-check.php" method="post" enctype="multipart/form-data"><br>
    <div id="main-wrapper">
        <div style="text-align: center;">
            <h2>Staff Login</h2>
            <img src="imgs/Staff.png" class="avatar" alt=""/><br>
        </div>

        <label for="staffNo"><b>Staff No:</b></label>
        <input id="staffNo" name="staffNo" type="text" class="inputvalues" placeholder="Enter Staff No"/><br>
        <label for="password"><b>Password:</b></label>
        <input id="password" name="password" type="password" class="inputvalues" placeholder="Type your Password"/><br>
        <div style="text-align: center;"><input name="login" type="submit" id="login_btn" value="Login"/><br></div>
        <div class="container signin">
            <p>First time user ? <a href="index.php?menu=register">Register</a>.</p>
        </div>
    </div>
</form>
