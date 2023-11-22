<?php include_once '../templates/header.php'; ?>
<?php include '../controllers/auth.php'; ?>

<h1>Каталог книг</h1>

<form id="exti-form" style="float:right" action="../controllers/exit.php">
    <input type="submit" value="Выйти">
</form>

<form id="filter-form">

    <select name="genre_id">

        <option value="-1">Все жанры</option>

        <?php

            include_once '../models/genres.php';

            $current_genre_id = $_GET['genre_id'];

            foreach($genres as $genre){
                $selected = intval($genre['genre_id']) == $current_genre_id ? " selected='selected' " : " ";
                echo "<option".$selected."value='".$genre['genre_id']."'>".$genre['genre_name']."</option>";
            }

        ?>

    </select>

    <select name="author_id">

        <option value="-1">Все авторы</option>

        <?php

            include_once '../models/authors.php';

            $current_author_id = $_GET['author_id'];

            foreach($authors as $author){
                $selected = intval($author['author_id']) == $current_author_id ? " selected='selected' " : " ";
                echo "<option".$selected."value='".$author['author_id']."'>".$author['author_name']."</option>";
            }

        ?>

    </select>

    <?php

        $current_book_name = isset($_GET['book_name']) ? " value='".$_GET['book_name']."' " : " ";

        echo "<input".$current_book_name."name='book_name' size='50' type='text' placeholder='Поиск по названию'>"

    ?>

    <select name="publishing_id">

        <option value="-1">Все издательства</option>

        <?php

            include_once '../models/publishings.php';

            $current_publishing_id = $_GET['publishing_id'];

            foreach($publishings as $publishing){
                $selected = intval($publishing['publishing_id']) == $current_publishing_id ? " selected='selected' " : " ";
                echo "<option".$selected."value='".$publishing['publishing_id']."'>".$publishing['publishing_name']."</option>";
            }

        ?>

    </select>

    <?php

        $current_year = isset($_GET['year']) ? " value='".$_GET['year']."' " : " ";

        echo "<input".$current_year."name='year' type='number' placeholder='Год выпуска'>"

    ?>

    <input type="submit" value="Поиск">

</form><br>

<div id="catalog">

    <?php

        $isModerator = $_SESSION['role_id'] == 2 || $_SESSION['role_id'] == 3;
        $isAdmin = $_SESSION['role_id'] == 3;

        if($isModerator){
            echo 
            "<a href='new-book.php' class='content-box'>"
            ."<img src='../picture/new.png'><br>"
            ."<span>Добавить книгу</span>"
            ."</a>";
        }

        include_once '../models/books.php';

        foreach ($books as $book) {
            $editButton = $isModerator ? " <a href='edit-book.php?book_id=".$book['book_id']."'>Редактировать</a> " : " ";
            $deleteButton = $isAdmin ? " <button onclick='removeBookById(".$book['book_id'].")'>Удалить</button> " : " ";

            echo 
            "<div class='content-box'>"
            ."<img src='../picture/".$book['picture']."'><br>"
            ."<span class='price-label'>".$book['sale_price']." р</span><br>"
            ."<span>".$book['book_name']."</span><br>"
            .$editButton."<br>"
            .$deleteButton
            ."</div>";
        }
    ?>

</div>

<script src="../lib/jquery-3.7.1.min.js"></script>
<script src="../js/delete-book.js"></script>

<?php include_once '../templates/footer.php'; ?>