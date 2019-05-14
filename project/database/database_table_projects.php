<?php
	require_once('../database_connection.php');
	try{
		$sql_create_table_projects = "CREATE TABLE IF NOT EXISTS Projects (
									project_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									project_name VARCHAR(30) NOT NULL,
                                    project_manager VARCHAR(30) NOT NULL,
                                    project_deadline VARCHAR(30) NOT NULL,
                                    project_investor VARCHAR(30) NOT NULL,
                                    project_notes VARCHAR(100)
								)";
		$state = $connection->exec($sql_create_table_projects);
		echo "Successfully created table!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}finally{
		$connection = null;
	}
?>