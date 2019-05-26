<?php
	try{
		$sql_create_table_teams = "CREATE TABLE IF NOT EXISTS Teams (
									team_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									team_name VARCHAR(30) NOT NULL,
									team_leader_username VARCHAR(30) NOT NULL,
                                    team_task VARCHAR(30) NOT NULL,
									team_description VARCHAR(255),
									project_id INT(6) NOT NULL DEFAULT 0,
									FOREIGN KEY (project_id) REFERENCES Projects(project_id)
								)";
		$state = $connection->exec($sql_create_table_teams);
		echo "Successfully created table!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}
?>