<?php
require '../inc/conn.php';

$id = $_SESSION['id'];
extract($_POST);

$sql = "SELECT * FROM fileupload_db WHERE id = $id";
$row = $con->query($sql)->fetch_assoc();

if ($password1 != $row['password']) {
    ?>
    <script>
        alert('Sorry, the current password is incorrect');
        window.location='index.php?menu=password';
    </script>
    <?php
} else {
    $sql = "UPDATE fileupload_db SET password = '$password2' WHERE id = $id";
    $con->query($sql);
    ?>
    <script>
        alert('Password changed successfully');
        window.location='index.php?menu=password';
    </script>
    <?php
}
