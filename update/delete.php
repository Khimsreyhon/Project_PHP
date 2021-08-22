<?php
    require_once('../database.php');
    deletPost($_GET['id']);
    header('Location: http://localhost/project_php/?page=dog');
?> 