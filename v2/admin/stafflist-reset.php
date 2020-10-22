<?php
require '../inc/conn.php';

$id = $_GET['id'];
$sql = "UPDATE fileupload_db SET `password` = ICno WHERE id = $id";
$con->query($sql);
?>
<script>
    alert('This staff password is his/her IC number');
    window.location='index.php?menu=stafflist';
</script>
