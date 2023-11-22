<?php

include_once '../controllers/db.php';

$request = file_get_contents("php://input");
$user = json_decode($request);

$query = "INSERT INTO `users` VALUES(NULL, '".$user->login."', '".$user->password."', 1);";
$result = mysqli_query($link, $query);

if($result){

    include '../models/users.php';

}

?>