<?php
    include_once '../templates/header.php';
    include '../controllers/auth.php';
    include '../controllers/for-mods.php';
?>

<?php

$book_id = $_GET['book_id'];

include '../models/current_book.php';

?>

<form id="book-form">
    <h1>Изменение книги #<?php echo $book['book_id']; ?></h1>

    <input required type = "text" placeholder="Название" name="book_name" value="<?php echo $book['book_name']; ?>"><br><br>

    <select required name="genre_id">

        <option disabled>Жанр</option>

        <?php

            include_once '../models/genres.php';

            foreach($genres as $genre){
                $selected = $genre['genre_id'] == $book['genre_id'] ? " selected " : " ";
                echo "<option".$selected."value='".$genre['genre_id']."'>".$genre['genre_name']."</option>";
            }

        ?>

    </select><br><br>

    <select required name="author_id">

        <option disabled>Автор</option>

        <?php

            include_once '../models/authors.php';

            foreach($authors as $author){
                $selected = $author['author_id'] == $book['author_id'] ? " selected " : " ";
                echo "<option".$selected."value='".$author['author_id']."'>".$author['author_name']."</option>";
            }

        ?>

    </select><br><br>

    <select required name="publishing_id">

    <option disabled>Издательство</option>

        <?php

            include_once '../models/publishings.php';

            foreach($publishings as $publishing){
                $selected = $publishing['publishing_id'] == $book['publishing_id'] ? " selected " : " ";
                echo "<option".$selected."value='".$publishing['publishing_id']."'>".$publishing['publishing_name']."</option>";
            }

        ?>

    </select><br><br>

    <input required type = "number" placeholder="Год издания" name="year" value="<?php echo $book['year']; ?>"><br><br>
    <input required type = "number" placeholder="Цена" name="purchase_price" value="<?php echo $book['purchase_price']; ?>"><br><br>
    <input required type = "number" placeholder="Цена на продажу" name="sale_price" value="<?php echo $book['sale_price']; ?>"><br><br>
    <input required type = "text" placeholder="Путь к изображению" name="picture" value="<?php echo $book['picture']; ?>"><br><br>
    <input type="hidden" name="book_id" value="<?php echo $book['book_id']; ?>">

    <input type="submit" value="Сохранить">

</form>

<script src="../lib/jquery-3.7.1.min.js"></script>
<script src="../js/edit-book.js"></script>

<?php include_once '../templates/footer.php'; ?>