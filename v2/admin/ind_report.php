<h2>Report By Individual</h2>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM fileupload_db WHERE id = $id";
$result = $con->query($sql);
if ($result->num_rows == 0) header('location: ../logout.php');
$row = $result->fetch_assoc();
?>

<table class="normal_table">
    <tr>
        <th>Staff Name</th>
        <th>Staff No.</th>
    </tr>
    <tr>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['staffNo']; ?></td>
    </tr>
</table>

<br><br>
<form action="index.php?menu=ind_report&id=<?php echo $id; ?>" method="post">
    <table style="margin: auto;">
        <tr>
            <td><label for="bulan">MONTH</label></td>
            <td><label for="tahun">YEAR</label></td>
            <td rowspan="2">
                <button type="submit" class="btn btn_normal">View</button>
            </td>
        </tr>
        <tr>
            <td>
                <select name="bulan" id="bulan" required>
                    <option value=""></option>
                    <?php
                    foreach ($listbulan as $index=>$namabulan) {
                        echo "<option value=\"$index\">$namabulan</option>";
                    }
                    ?>
                </select>
            </td>
            <td>
                <input type="number" name="tahun" id="tahun" required value="<?php echo date('Y'); ?>">
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['bulan'])) {
    extract($_POST);
    echo "<h2>Report For $listbulan[$bulan] $tahun</h2>";
    ?>
    <table class="normal_table">
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
    <?php
}
