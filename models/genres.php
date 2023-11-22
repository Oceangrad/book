<?php

include_once '../controllers/db.php';

$query = "SELECT * FROM `genres_of_books`";
$result = mysqli_query($link, $query);

$genres = [];
while($genre = mysqli_fetch_assoc($result)){
    array_push($genres, $genre);
}

?>