<?php
$tarikh = date('Y-m-d');
$sql = "SELECT * FROM fileupload_db 
        LEFT JOIN tbl_touch ON fileupload_db.id = tbl_touch.id_staff
        WHERE id = $id AND DATE(touch_in) = '$tarikh'";
$result = $con->query($sql);
if ($result->num_rows) {
    $row = $result->fetch_object();
    $touch_in = $row->touch_in;
    $touch_out = ($row->touch_out != '0000-00-00 00:00:00') ? $row->touch_out : '-';
} else {
    $touch_in = '-';
    $touch_out = '-';
}
?>

<div id="main-wrapper">

    <div style="text-align: center;">
        <h2>Check-In Page</h2>
        <?php echo '<img class="avatar" src="../' . $_SESSION["imglink"] . '"/>'; ?><br>
        <h3>Name:
            <?php echo $_SESSION['fullname'] ?>
        </h3>
        <h3>Staff No:
            <?php echo $_SESSION['staffNo'] ?>
        </h3>
        <h3>IC No:
            <?php echo $_SESSION['ICno'] ?>
        </h3>
    </div>

    <div class="check_in">

        <table>
            <tr>
                <th>Touch In</th>
                <th>Touch Out</th>
            </tr>
            <tr>
                <td<?php awas($touch_in, 'mula'); ?>>
                    <?php echo ($touch_in == '-') ? $touch_in : masa($touch_in); ?>
                </td>
                <td<?php awas($touch_in, 'tamat'); ?>>
                    <?php echo ($touch_out == '-') ? $touch_out : masa($touch_out); ?>
                </td>
            </tr>
            <tr>
                <th>
                    <button onclick="window.location='record_data_in.php';" style="font-size:28px">
                        <i class="fa fa-wifi"></i>
                    </button>
                </th>
                <th>
                    <button onclick="window.location='record_data_out.php';" style="font-size:28px">
                        <i class="fa fa-wifi"></i>
                    </button>
                </th>
            </tr>
        </table>

        <br>
        <h3 style="text-align: center;"><?php echo date('j-n-Y'); ?></h3>
        <br>
    </div>
</div>
