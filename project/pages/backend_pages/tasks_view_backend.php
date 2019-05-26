<?php
    require_once('../database_connection.php');

    try{$arr = $connection->query("SELECT * FROM Tasks ORDER BY task_id ASC")->fetchAll();}catch(Exception $e){echo $e->getMessage();}

    
?>