<?php
	try{
		$sql_create_table_commits = "CREATE TABLE IF NOT EXISTS Commits (
									commit_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									commit_comment VARCHAR(255) NOT NULL,
                                    commit_document VARCHAR(255),
                                    commit_image VARCHAR(255),                                    
                                    commit_time DATETIME NOT NULL,
                                    task_id INT(6) NOT NULL DEFAULT 0,
									FOREIGN KEY (task_id) REFERENCES Tasks(task_id)
								)";
		$state = $connection->exec($sql_create_table_commits);
		echo "Successfully created table for commits!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}
?>