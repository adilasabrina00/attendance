<h2>Report</h2>

<form action="index.php?menu=report" method="post">
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
                    foreach ($listbulan as $index => $namabulan) {
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

    <form action="report-print.php" method="post">
        <p style="text-align: center">
            <input type="hidden" name="bulan" value="<?php echo $bulan; ?>">
            <input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
            <button type="submit" class="btn btn_normal">Print</button>
        </p>
    </form>
    <?php
}
