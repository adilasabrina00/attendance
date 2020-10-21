<h2>View Report By Date</h2>

<form action="index.php?menu=by_date" method="post">
    <table style="margin: auto">
        <tr>
            <td>Choose Date</td>
            <td rowspan="2">
                <button type="submit" class="btn btn_normal">View</button>
            </td>
        </tr>
        <tr>
            <td>
                <input type="date" name="tarikh" required>
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['tarikh'])) {
    $tarikh = $_POST['tarikh'];
    echo '<h2>Report For ' . kalih($tarikh) . '</h2>';
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
        $bil = 1;
        $sql = "SELECT * FROM fileupload_db
                JOIN tbl_touch ON fileupload_db.id = tbl_touch.id_staff
                WHERE DATE(touch_in) = '$tarikh' OR DATE(touch_out) = '$tarikh'
                ORDER BY fullname";
        $result = $con->query($sql);
        echo $con->error;
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['staffNo']; ?></td>
                <td><?php echo masa($row['touch_in']); ?></td>
                <td><?php echo masa($row['touch_out']); ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
