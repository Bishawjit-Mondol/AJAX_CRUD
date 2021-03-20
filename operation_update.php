<?php
include "database.php";

$id = $_GET['id'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$city = $_GET['city'];

$updateQuery = "UPDATE `user_data` SET `name`='$name',`phone`='$phone',`city`='$city' WHERE id = $id";

// if ($database->query($updateQuery)) {
//     echo "Update Successful";
// } 

if ($database->query($updateQuery)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
?>