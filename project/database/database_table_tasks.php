<?php
	try{
		$sql_create_table_projects = "CREATE TABLE IF NOT EXISTS Tasks (
									task_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									task_name VARCHAR(300) NOT NULL,
                                    task_deadline VARCHAR(30) NOT NULL,
									task_description VARCHAR(30000) NOT NULL,                                     
                                    task_priority INT(6) NOT NULL DEFAULT 0,
                                    user_id INT(6) NOT NULL DEFAULT 0,
									project_name VARCHAR(30),
									FOREIGN KEY (user_id) REFERENCES User(user_id),
									FOREIGN KEY (project_name) REFERENCES Projects(project_name)
								)";
		$state = $connection->exec($sql_create_table_projects);
		echo "Successfully created table!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}
?>