<?php

include_once '../controllers/db.php';

$query = "SELECT `book_id`, `book_name`, `sale_price`, `picture` FROM `books`";
$is_filtered = false;

$filterTags = ["genre_id", "author_id", "book_name", "publishing_id", "year"];

foreach ($_GET as $key => $value) {
    if(in_array($key, $filterTags) && !empty($value) && $value != -1){
        $is_filtered = true;
        break;
    }
}

if($is_filtered){
    $query = $query." WHERE ";

    foreach ($_GET as $key => $value) {
        if(in_array($key, $filterTags) && !empty($value) && $value != -1){
            if(intval($value) == $value)
                $query = $query."`".$key."` = '".$value."' AND ";
            else
                $query = $query."`".$key."` LIKE '%".$value."%' AND ";
        }
    }
    $query = rtrim($query, " AND ");
}

$result = mysqli_query($link, $query);

$books = [];
while($book = mysqli_fetch_assoc($result)){
    array_push($books, $book);
}

?>