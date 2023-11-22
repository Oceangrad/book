<?php

include_once '../controllers/db.php';

$request = file_get_contents("php://input");
$user = json_decode($request);

$query = "SELECT * FROM `users` WHERE `login` = '".$user->login."' AND `password` = '".$user->password."';";
$result = mysqli_query($link, $query);

if($result->num_rows > 0){
    $user = mysqli_fetch_assoc($result);

    session_start();

    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['role_id'] = $user['role_id'];

    echo "200";
}

?>