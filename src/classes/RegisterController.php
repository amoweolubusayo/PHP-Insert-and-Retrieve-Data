<?php
include_once '../myfirstproject/classes/DbController.php';
$newConnection = new DB_connection();
if(isset($_POST['button_save']))
 {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $country = $_POST['country'];
 $newConnection->insert($name,$email,$country);
 }
?>