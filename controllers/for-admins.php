<?php

if(!isset($_SESSION['user_id']) || $_SESSION['role_id'] == 1 || $_SESSION['role_id'] == 2)
    header('Location: ../views/not-accessible.php');

?>