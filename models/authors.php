<?php

include_once '../controllers/db.php';

$query = "SELECT * FROM `author`";
$result = mysqli_query($link, $query);

$authors = [];
while($author = mysqli_fetch_assoc($result)){
    array_push($authors, $author);
}

?>