<?php
    require_once('../database_connection.php');

    $edit = @$_GET['edit'];
    if($edit == '1') 
    {
        $_SESSION["editable"] = true;
    }
    else
    {
        $_SESSION["editable"] = false;
    }

    $arr = $connection->query("SELECT * FROM Teams ORDER BY team_name ASC")->fetchAll();
?>