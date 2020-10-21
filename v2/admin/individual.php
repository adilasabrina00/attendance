<h2>Report By Individual</h2>

<table class="normal_table">
    <tr>
        <th>No.</th>
        <th>Staff Name</th>
        <th>Staff No.</th>
        <th>Action</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM fileupload_db ORDER BY fullname";
    $result = $con->query($sql);
    echo $con->error;
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['staffNo']; ?></td>
            <td style="text-align: center;">
                <a href="index.php?menu=ind_report&id=<?php echo $row['id']; ?>">View</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
