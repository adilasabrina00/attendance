<h2>View Report By Date</h2>

<form action="index.php?menu=by_date" method="post">
    <table style="margin: auto">
        <tr>
            <td><label for="jenis">Type Of Attendance</label></td>
            <td rowspan="2" style="width: 30px;"><br></td>
            <td><label for="tarikh">Choose Date</label></td>
            <td rowspan="2" style="width: 30px;"><br></td>
            <td rowspan="2">
                <button type="submit" class="btn btn_normal">View</button>
            </td>
        </tr>
        <tr>
            <td>
                <select name="jenis" id="jenis" required>
                    <option value="All">All</option>
                    <option value="Early">Early</option>
                    <option value="Late">Late</option>
                </select>
            </td>
            <td>
                <input type="date" name="tarikh" id="tarikh" required>
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['tarikh'])) {
    $jenis = $_POST['jenis'];
    $tarikh = $_POST['tarikh'];
    echo '<h2>Report For ' . kalih($tarikh) . ' (' . $jenis . ')</h2>';
    ?>
    <table class="normal_table">
        <tr>
            <th>No.</th>
            <th>Staff Name</th>
            <th>Staff No.</th>
            <th>Touch In</th>
            <th>Touch Out</th>
        </tr>
        <?php
        $mulakerja .= ':00';
        $tamatkerja .= ':00';
        if ($jenis == 'Late') {
            $sql = "SELECT * FROM fileupload_db
                    JOIN tbl_touch ON fileupload_db.id = tbl_touch.id_staff
                    WHERE (DATE(touch_in) = '$tarikh' OR DATE(touch_out) = '$tarikh')
                    AND (TIME(touch_in) > '$mulakerja' OR TIME(touch_out) > '$tamatkerja')
                    ORDER BY fullname";
        } elseif ($jenis == 'Early') {
            $sql = "SELECT * FROM fileupload_db
                    JOIN tbl_touch ON fileupload_db.id = tbl_touch.id_staff
                    WHERE (DATE(touch_in) = '$tarikh' OR DATE(touch_out) = '$tarikh')
                    AND (TIME(touch_in) < '$mulakerja' AND TIME(touch_out) > '$tamatkerja')
                    ORDER BY fullname";
        } else {
            $sql = "SELECT * FROM fileupload_db
                    JOIN tbl_touch ON fileupload_db.id = tbl_touch.id_staff
                    WHERE DATE(touch_in) = '$tarikh' OR DATE(touch_out) = '$tarikh'
                    ORDER BY fullname";
        }

        $result = $con->query($sql);
        echo $con->error;
        $bil = 1;
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['staffNo']; ?></td>
                <td<?php awas($row['touch_in'], 'mula'); ?>>
                    <?php echo masa($row['touch_in']); ?>
                </td>
                <td<?php awas($row['touch_out'], 'tamat'); ?>>
                    <?php echo masa($row['touch_out']); ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
