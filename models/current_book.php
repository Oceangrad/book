<?php

include_once '../controllers/db.php';

$query = "SELECT * FROM `books` WHERE `book_id` = ".$book_id.";";

$result = mysqli_query($link, $query);

$book = mysqli_fetch_assoc($result);

?>