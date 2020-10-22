<?php
require '../inc/conn.php';

extract($_POST);

$sql = "SELECT * FROM admin_db";
$row = $con->query($sql)->fetch_assoc();

if ($password1 != $row['password']) {
    ?>
    <script>
        alert('Sorry, the current password is incorrect');
        window.location='index.php?menu=password';
    </script>
    <?php
} else {
    $sql = "UPDATE admin_db SET password = '$password2'";
    $con->query($sql);
    ?>
    <script>
        alert('Password changed successfully');
        window.location='index.php?menu=password';
    </script>
    <?php
}
