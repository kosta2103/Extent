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

    function checkTeamname($team_name, $connection)
    {
        $arr = $connection->query("SELECT team_name FROM Teams WHERE team_name = '$team_name'")->fetchAll();
        if(empty($arr))
        {
            return false;
        }
        else
        {
            return true;
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
    if(isset($_GET['team_id']))
    {
        $team_id = $_GET['team_id'];
        $connection->query("UPDATE User SET team_id='0' WHERE team_id='$team_id'");
        $connection->query("DELETE FROM Teams WHERE team_id='$team_id'");
        echo "<script> window.location.href='project_teams_view.php'</script>";
    }
?>