<?php
    require_once('database_create.php');
    require_once('../database_connection.php');

    require_once('database_table_role.php');
    require_once('database_insert_role.php');

    require_once('database_table_projects.php');
    require_once('database_table_teams.php');
    
    require_once('database_table_user.php');
    require_once('database_insert_user.php');

    require_once('database_table_tasks.php');
    require_once('database_table_commits.php');
	
	require_once('database_table_invoice.php');
	require_once('database_insert_invoice.php');
    
    $connection = null;
?>