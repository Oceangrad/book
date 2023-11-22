<?php

    include_once '../templates/header.php';
    include '../controllers/auth.php';
    include '../controllers/for-mods.php';

?>

<form id="book-form">
    <h1>Добавить книгу</h1>

    <input required type = "text" placeholder="Название" name="book_name"><br><br>

    <select required name="genre_id">

        <option disabled>Жанр</option>

        <?php

            include_once '../models/genres.php';

            foreach($genres as $genre){
                echo "<option value='".$genre['genre_id']."'>".$genre['genre_name']."</option>";
            }

        ?>

    </select><br><br>

    <select required name="author_id">

        <option disabled>Автор</option>

        <?php

            include_once '../models/authors.php';

            foreach($authors as $author){
                echo "<option value='".$author['author_id']."'>".$author['author_name']."</option>";
            }

        ?>

    </select><br><br>

    <select required name="publishing_id">

    <option disabled>Издательство</option>

        <?php

            include_once '../models/publishings.php';

            foreach($publishings as $publishing){
                echo "<option value='".$publishing['publishing_id']."'>".$publishing['publishing_name']."</option>";
            }

        ?>

    </select><br><br>

    <input required type = "number" placeholder="Год издания" name="year"><br><br>
    <input required type = "number" placeholder="Цена" name="purchase_price"><br><br>
    <input required type = "number" placeholder="Цена на продажу" name="sale_price"><br><br>
    <input required type = "text" placeholder="Путь к изображению" name="picture"><br><br>

    <input type="submit" value="Создать">

</form>
    
<script src="../lib/jquery-3.7.1.min.js"></script>
<script src="../js/add-book.js"></script>

<?php include_once '../templates/footer.php'; ?>