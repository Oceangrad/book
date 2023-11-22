<?php

include_once '../controllers/db.php';

$request = file_get_contents("php://input");
$book = json_decode($request);

$query = "UPDATE `books` SET `book_name`='".$book->book_name."',`author_id`=".$book->author_id.",`publishing_id`=".$book->publishing_id.",`genre_id`=".$book->genre_id.",`year`=".$book->year.",`purchase_price`=".$book->purchase_price.",`sale_price`=".$book->sale_price.",`picture`='".$book->picture."' WHERE `book_id` = ".$book->book_id.";";
$result = mysqli_query($link, $query);

if($result){
    echo "200";
}

?>