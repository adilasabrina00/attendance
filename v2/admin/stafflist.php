<h2>Staff List</h2>

<table class="normal_table">
    <tr>
        <th>No.</th>
        <th>Staff Name</th>
        <th>Staff No</th>
        <th>IC No</th>
        <th>Action</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM fileupload_db ORDER BY fullname";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['staffNo']; ?></td>
            <td><?php echo $row['ICno']; ?></td>
            <td>
                <a href="stafflist-reset.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to reset?');">Password Reset</a>
                |
                <a href="stafflist-delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?');">Delete Staf</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>