<?php
include "database.php";

  $name = $_GET['name'];
  $phone = $_GET['phone'];
  $city = $_GET['city'];

 $QueryInsert ="INSERT INTO `user_data`(`name`, `phone`, `City`) VALUES ('$name', '$phone', '$city')";
//  if($database->query($QueryInsert)){
//     $msg = json_encode("Success");
//     return $msg;
//  }

 if ($database->query($QueryInsert)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
 //header('location: index.php');
