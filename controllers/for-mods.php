<?php

if(!isset($_SESSION['user_id']) || $_SESSION['role_id'] == 1)
    header('Location: ../views/not-accessable.php');

?>