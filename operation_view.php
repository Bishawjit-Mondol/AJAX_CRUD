<?php
include "database.php";
$ViewQuery = "SELECT * FROM `user_data` ORDER BY id DESC";
$allData = $database->query($ViewQuery);

if ($allData->num_rows) : $counter = 1; ?>
    <?php while ($data = $allData->fetch_object()) : ?>
        
        <tr>
            <td><?= $counter++;  ?></td>
			<td><?= $data->name; ?></td>
			<td><?= $data->phone;?></td>
			<td><?= $data->city; ?></td>
            <td>
                <button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
                    data-id="<?=$data->id;?>"
                    data-name="<?=$data->name;?>"
                    data-phone="<?=$data->phone;?>"
                    data-city="<?=$data->city;?>">Edit
                </button>
                <a href="#deleteEmployeeModal" class="delete btn btn-danger" data-id="<?=$data->id;?>" data-toggle="modal">Delete</a>
            </td>
		</tr>
    <?php endwhile; ?>
<?php endif; ?>

?>