<?php
include "database.php";

$id = $_GET['id'];
$DeleteQuery = "DELETE FROM `user_data` WHERE id = $id";

if ($database->query($DeleteQuery)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
?>