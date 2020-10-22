<?php
require '../inc/conn.php';

$id = $_SESSION['id'];
extract($_POST);

$sql = "SELECT * FROM fileupload_db WHERE id = $id";
$rowstaff = $con->query($sql)->fetch_assoc();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance System</title>
    <link rel="stylesheet" href="../inc/style-print.css">
</head>
<body>
<div class="container">
    <p class="tajuk">SK PAUH STAFF ATTENDANCE SYSTEM</p>
    <table style="margin: auto;">
        <tr>
            <td>Staff Name</td>
            <td>:</td>
            <td><?php echo $rowstaff['fullname']; ?></td>
        </tr>
        <tr>
            <td>Staff No</td>
            <td>:</td>
            <td><?php echo $rowstaff['staffNo']; ?></td>
        </tr>
    </table>

    <p class="tajuk">Report For <?php echo "$listbulan[$bulan] $tahun"; ?></p>

    <table class="table" border="1">
        <tr>
            <th>Date</th>
            <th>Touch In</th>
            <th>Touch Out</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tbl_touch 
                WHERE id_staff = $id
                AND MONTH (touch_in) = $bulan AND YEAR (touch_in) = $tahun
                ORDER BY touch_in";
        $result = $con->query($sql);
        echo $con->error;
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr style="text-align: center;">
                <td><?php echo tarikh($row['touch_in']); ?></td>
                <td<?php awas($row['touch_in'], 'mula'); ?>><?php echo masa($row['touch_in']); ?></td>
                <td<?php awas($row['touch_out'], 'tamat'); ?>><?php echo masa($row['touch_out']); ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <div class="sorok">
        <button type="button" class="btn btn_normal" onclick="print();">Print</button>
        <button type="button" class="btn btn_normal" onclick="window.location='index.php?menu=report'">Back</button>
    </div>
</div>
</body>
</html>
