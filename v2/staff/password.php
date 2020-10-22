<h2>Change Password</h2>

<form action="password-change.php" method="post">
    <table style="margin: auto;">
        <tr>
            <td><label for="password1">Current Password</label></td>
            <td><input type="password" name="password1" id="password1" required></td>
        </tr>
        <tr>
            <td><label for="password2">New Password</label></td>
            <td><input type="password" name="password2" id="password2" required></td>
        </tr>
        <tr>
            <td><label for="password3">Verify Password</label></td>
            <td><input type="password" name="password3" id="password3" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit" class="btn btn_normal">Save Changes</button>
            </td>
        </tr>
    </table>
</form>

<script>
    $(function () {
        $('form').submit(function () {
            let kata1 = $('#password2').val();
            let kata2 = $('#password3').val();

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
