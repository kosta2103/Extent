<?php
    require_once('../database_connection.php');

    $task_id = $_SESSION['task_id'] = $_GET['task_id'];

    $arr = $connection->query("SELECT * FROM Tasks WHERE task_id = '$task_id'")->fetchAll();
    $user_id = $arr[0]['user_id'];

    $assignee_arr = $connection->query("SELECT username FROM User WHERE user_id='$user_id'")->fetchAll();
    $assignee = $assignee_arr[0]['username'];
    
    if(isset($_GET['edit']))
    {
        if($_GET['edit'] == 1)
        {
            $_SESSION['editable'] = true;
        }
        else
        {
            $_SESSION['editable'] = false;
        }
    }

    $project_name = $arr[0]['project_name'];
    $assignee_arr_for_proj = $connection->query("SELECT username FROM User INNER JOIN Teams ON User.team_id=Teams.team_id INNER JOIN Projects ON Teams.project_id = Projects.project_id WHERE Projects.project_name='$project_name' ORDER BY User.username ASC")->fetchAll();

    
    if(isset($_POST['submit_btn']))
    {
        $task_name = $_POST['task_name'];
        $task_description = $_POST['task_description'];
        $task_deadline = $_POST['task_deadline'];
        $as_username = $_POST['as_username'];
        $as_username = trim($as_username,'@');
        $task_priority = $_POST['task_priority'];


        try{$user_id_arr = $connection->query("SELECT user_id FROM User WHERE username = '$as_username'")->fetchAll();}catch(Exception $e){echo $e->getMessage();}
        $user_id = $user_id_arr[0]['user_id'];

        try{$connection->query("UPDATE Tasks SET task_name = '$task_name', task_description = '$task_description', task_deadline = '$task_deadline', user_id = '$user_id', task_priority = '$task_priority' WHERE task_id = '$task_id'");}catch(Exception $e){echo $e->getMessage();}
        echo "<script>window.location.href='tasks_view_edit?task_id='".$_SESSION['task_id']."</script>";
    }
?>