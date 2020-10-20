<?php
require 'inc/conn.php';

if(isset($_POST['login']))
{
    $staffNo=$_POST['staffNo'];
    $password=$_POST['password'];

    $query= "select * from fileupload_db WHERE staffNo='$staffNo' AND password='$password'";

    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_assoc($query_run);
        // valid
        $_SESSION['id']= $row['id'];
        $_SESSION['imglink']= $row['imglink'];
        $_SESSION['fullname']= $row['fullname'];
        $_SESSION['staffNo']= $row['staffNo'];
        $_SESSION['ICno']= $row['ICno'];
        header('location:staff/');
    }
    else
    {
        // invalid
        ?>
        <script type="text/javascript">
            alert("Invalid credentials");
            window.location='index.php?menu=login';
        </script>
        <?php
    }
}
