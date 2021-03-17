<?php
include "database.php";

  $name = $_GET['name'];
  $phone = $_GET['phone'];
  $city = $_GET['city'];

 $QueryInsert ="INSERT INTO `user_data`(`name`, `phone`, `City`) VALUES ('$name', '$phone', '$city')";
 if($database->query($QueryInsert)){
    $msg = json_encode("Success");
    return $msg;
 }

 //header('location: index.php');



?>