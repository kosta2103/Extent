<?php
    require_once('../database_connection.php');

    try{$projects = $connection->query("SELECT * FROM Projects")->fetchAll();}catch(Exception $e){echo $e->getMessage();}
    
?>