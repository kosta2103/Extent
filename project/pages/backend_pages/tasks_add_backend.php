<?php
    require_once('../database_connection.php');


    $assignee_arr = $connection->query("SELECT * FROM User")->fetchAll();
    $project_arr = $connection->query("SELECT * FROM Projects")->fetchAll();


    if(isset($_POST['task_btn']))
    {
        $project_name = $_POST['project_name_hidden'];
        $task_name = $_POST['task_name'];
        $task_deadline = $_POST['task_deadline'];
        $as_username = $_POST['as_username'];
        $task_description = $_POST['task_description'];
        $task_priority = '5';


        $as_username = trim($as_username, '@');
        $user_id_arr = $connection->query("SELECT user_id FROM User WHERE username = '$as_username'")->fetchAll();
        $user_id = $user_id_arr[0]['user_id'];

        $connection->query("INSERT INTO Tasks(task_name, task_deadline, task_priority, user_id, project_name) 
            VALUES('$task_name', '$task_deadline','$task_priority', '$user_id', '$project_name')
        ");
    }
?>