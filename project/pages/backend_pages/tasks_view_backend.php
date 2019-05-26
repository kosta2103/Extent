<?php
    require_once('../database_connection.php');

    $arr = $connection->query("SELECT * FROM Tasks ORDER BY task_id ASC")->fetchAll();

    
?>