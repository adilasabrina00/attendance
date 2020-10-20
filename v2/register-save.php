<?php
require 'inc/conn.php';

if (isset($_POST['register_btn'])) {

    $fullname = $_POST['fullname'];
    $staffNo = $_POST['staffNo'];
    $ICno = $_POST['ICno'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $img_name = $_FILES['imglink']['name'];
    $img_size = $_FILES['imglink']['size'];
    $img_tmp = $_FILES['imglink']['tmp_name'];

    $directory = 'uploads/';
    $target_file = $directory . $img_name;

    if ($password == $cpassword) {

        $query = "select * from fileupload_db WHERE staffNo='staffNo'";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            // there is already a user with the same Staff No
            ?>
            <script type="text/javascript">
                alert("User already exists.. try another Staff No");
                window.location = 'index.php?menu=home';
            </script>
            <?php
        } else if (file_exists($target_file)) {
            ?>
            <script type="text/javascript">
                alert("Image file already exists.. Please rename");
                window.location = 'index.php?menu=home';
            </script>
            <?php
        } else if ($img_size > 2097152) {
            ?>
            <script type="text/javascript">
                alert("Image file size larger than 2 MB.. Try another image file");
                window.location = 'index.php?menu=home';
            </script>
            <?php
        } else {
            move_uploaded_file($img_tmp, $target_file);
            $query = "insert into fileupload_db values('', '$fullname', '$staffNo','$ICno', '$password', '$target_file')";
            $query_run = mysqli_query($con, $query);

            if ($query_run) {
                ?>
                <script type="text/javascript">
                    alert("User Registered.. Go to login page to login");
                    window.location = 'index.php?menu=home';
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Error! Please contact system administrator");
                    window.location = 'index.php?menu=register';
                </script>
                <?php
            }
        }

    } else {
        ?>
        <script type="text/javascript">
            alert("Password and confirm password does not match!");
            window.location = 'index.php?menu=register';
        </script>
        <?php
    }
}