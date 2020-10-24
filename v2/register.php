<script type="text/javascript">
    function PreviewImage() {
        let oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

<form class="myform" action="register-save.php" method="post" enctype="multipart/form-data"><br>
    <div id="main-wrapper">
        <div style="text-align: center;">
            <h2>Register Form</h2>
            <img id="uploadPreview" src="imgs/avatar.png" class="avatar"/><br>
            <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
        </div>

        <label><b>Full Name:</b></label><br>
        <input required name="fullname" type="text" class="inputvalues" placeholder="Enter Full Name"/><br>
        <label><b>Staff No:</b></label><br>
        <input required name="staffNo" type="text" class="inputvalues" placeholder="Enter Staff No"/><br>
        <label><b>IC No:</b></label><br>
        <input required name="ICno" type="text" class="inputvalues" placeholder="Enter IC No" minlength="12" maxlength="12"/><br>
        <label><b>Password:</b></label><br>
        <span>There must be uppercase, lowercase letters and numbers.</span><br>
        <input required name="password" id="kata1" type="password" class="inputvalues"
               placeholder="Enter Password"/><br>
        <label><b>Comfirm Password:</b></label><br>
        <input required name="cpassword" id="kata2" type="password" class="inputvalues"
               placeholder="Enter Confirm Password"/><br>
        <div style="text-align: center;">
            <input required name="register_btn" type="submit" id="register_btn" value="Register"/><br>
        </div>
        <div class="container signin">
            <p>Already have account ? <a href="index.php?menu=login">Login</a>.</p>
        </div>
    </div>
</form>

<script>
    $(function () {
        $('form').submit(function () {
            let kata1 = $('#kata1').val();
            let kata2 = $('#kata2').val();

            if (kata1 !== kata2) {
                alert('Sorry, the password and confirm password must be the same');
                return false;
            } else {
                // looping kata1, flags on elements
                let besar = false;
                let kecil = false;
                let nombor = false;
                let panjang = kata1.length;

                for (let x = 0; x < panjang; x++) {
                    let huruf = kata1.charAt(x);
                    if (huruf === huruf.toUpperCase()) besar = true;
                    if (huruf === huruf.toLowerCase()) kecil = true;
                    if (!isNaN(huruf * 1)) nombor = true;
                }

                if (!besar || !kecil || !nombor) {
                    alert('Sorry, passwords must contain uppercase letters, lowercase letters and numbers');
                    return false;
                }
            }
        });
    });
</script>
