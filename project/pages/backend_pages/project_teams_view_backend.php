<?php
    require_once('../database_connection.php');

    function checkUsername($username, $connection)
    {
        $arr = $connection->query("SELECT username,team_id FROM User WHERE username = '$username'")->fetchAll();
        if(empty($arr))
        {
            return 0;
        }
        else if($arr[0]["team_id"] != '0')
        {
            return -1;
        }
        else
        {
            return 1;
        }
    }


    $edit = @$_GET['edit'];
    if($edit >= '0') 
    {
        $_SESSION["editable"] = true;
    }
    else
    {
        $_SESSION["editable"] = false;
    }

    $arr = $connection->query("SELECT * FROM Teams ORDER BY team_name ASC")->fetchAll();

    if(isset($_GET['username']))
    {
        $username = $_GET['username'];
        $connection->query("UPDATE User SET team_id = 0 WHERE username='$username'");
    }
?>