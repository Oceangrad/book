<?php

include_once '../controllers/db.php';

$query = "SELECT * FROM `publishing`";
$result = mysqli_query($link, $query);

$publishings = [];
while($publishing = mysqli_fetch_assoc($result)){
    array_push($publishings, $publishing);
}

?>