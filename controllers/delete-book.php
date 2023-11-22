<?php

include_once '../controllers/db.php';

$book_id = file_get_contents("php://input");

$query = "DELETE FROM `books` WHERE `book_id` = ".$book_id.";";
$result = mysqli_query($link, $query);

if($result){
    echo "200";
}

?>