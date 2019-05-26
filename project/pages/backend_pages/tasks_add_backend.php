<?php
    require_once('../database_connection.php');


    try{$assignee_arr = $connection->query("SELECT * FROM User")->fetchAll();}catch(Exception $e){echo $e->getMessage();}
    try{$project_arr = $connection->query("SELECT * FROM Projects")->fetchAll();}catch(Exception $e){echo $e->getMessage();}


    if(isset($_POST['task_btn']))
    {
        $project_name = $_POST['project_name_hidden'];
        $task_name = $_POST['task_name'];
        $task_deadline = $_POST['task_deadline'];
        $as_username = $_POST['as_username'];
        $task_description = $_POST['task_description'];
        $task_priority = $_POST['task_priority'];
        $task_description = $_POST['task_description'];


        $as_username = trim($as_username, '@');
        try{$user_id_arr = $connection->query("SELECT user_id FROM User WHERE username = '$as_username'")->fetchAll();}catch(Exception $e){echo $e->getMessage();}
        $user_id = $user_id_arr[0]['user_id'];

        try{$connection->query("INSERT INTO Tasks(task_name, task_deadline, task_priority, user_id, project_name, task_description) 
            VALUES('$task_name', '$task_deadline','$task_priority', '$user_id', '$project_name', '$task_description')
        ");}catch(Exception $e){echo $e->getMessage();}
    }
?>