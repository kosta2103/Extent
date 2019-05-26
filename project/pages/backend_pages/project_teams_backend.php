<?php
    require_once('../database_connection.php');

    function checkUsername($username, $connection)
    {
        $arr = $connection->query("SELECT username,team_id FROM User WHERE username = '$username'")->fetchAll();
        if(empty($arr))
        {
            return 0;
        }
        else if($arr[0]["team_id"] != NULL)
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

    try{$tls = $connection->query("SELECT username FROM User WHERE role_id = '3' AND team_id IS NULL")->fetchAll();}catch(Exception $e){echo $e->getMessage();}

    if(isset($_POST['submit_btn']))
    {
        $team_name = $_POST['team_name'];
        $team_members = explode(" ", $_POST['team_members']);
        //echo "<script> console.log('".$team_members[0]."')</script>";
        //echo "<script> console.log('".$team_members[1]."')</script>";
        $team_leader = $_POST['team_leader'];
        $team_task = $_POST['team_task'];
        $team_description = $_POST['team_description'];

        if(!checkTeamname($team_name, $connection))
        {
            if(checkUsername($team_leader, $connection) == 1)
            {
                try{$connection->query("INSERT INTO Teams(team_name, team_leader_username, team_task, team_description)
                VALUES('$team_name', '$team_leader', '$team_task', '$team_description')");}catch(Exception $e){echo $e->getMessage();}

                try{$connection->query("UPDATE User SET team_id = (SELECT team_id FROM Teams WHERE team_name = '$team_name'), role_id='3' WHERE username = '$team_leader'");}catch(Exception $e){echo $e->getMessage();}
            }
            else if(checkUsername($team_leader, $connection) == -1)
            {
                echo "<script> alert('Korisnik @$team_leader je clan tima.') </script>";
            }
            else
            {
                echo "<script> alert('Korisnicko ime $team_leader tim lidera ne postoji.') </script>";
            }
        }
        else
        {
            echo "<script> alert('Ime tima $team_name je zauzeto.') </script>";
        }
        
        foreach($team_members as $member)
        {
            if(checkUsername($member, $connection) == 0)
            {
                echo "<script> alert('Korisnicko ime $member ne postoji.') </script>";
                continue;
            }
            else if(checkUsername($member, $connection) == -1)
            {
                echo "<script> alert('Korisnik @$member je clan tima.') </script>";
                continue;
            }
            else
            {
                try{$connection->query("UPDATE User SET team_id = (SELECT team_id FROM Teams WHERE team_name = '$team_name') WHERE username = '$member'");}catch(Exception $e){echo $e->getMessage();}
            }
        }
    }
?>