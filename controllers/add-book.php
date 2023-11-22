<?php

include_once '../controllers/db.php';

$request = file_get_contents("php://input");
$book = json_decode($request);

$query = "INSERT INTO `books` VALUES(NULL, '".$book->book_name."', ".$book->author_id.", ".$book->publishing_id.", ".$book->genre_id.", ".$book->year.", '".$book->purchase_price."', '".$book->sale_price."', '".$book->picture."');";
$result = mysqli_query($link, $query);

if($result){
    echo "200";
}

?>