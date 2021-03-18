<?php
include "database.php";
$ViewQuery = "SELECT * FROM `user_data`";
$allData = $database->query($ViewQuery);

if ($allData->num_rows) : $counter = 1; ?>
    <?php while ($data = $allData->fetch_object()) : ?>
        
        <tr>
            <td><?= $counter++;  ?></td>
			<td><?= $data->name; ?></td>
			<td><?= $data->phone;?></td>
			<td><?= $data->city; ?></td>
		</tr>
    <?php endwhile; ?>
<?php endif; ?>

?>