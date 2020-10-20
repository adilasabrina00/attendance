<?php
require 'inc/conn.php';

if (isset($_POST['login'])) {
    $password = $_POST['password'];

    $query = "select * from admin_db WHERE password='$password'";

    $query_run = mysqli_query($con, $query);
    echo $con->error;
    if (mysqli_num_rows($query_run) == 0) {
        // invalid
        ?>
        <script type="text/javascript">
            alert("Invalid credentials") ;
            window.location = 'index.php?menu=admin_login';
        </script>
        <?php
    } else {
        header('location: admin/view_report.php');
    }
}
