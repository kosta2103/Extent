<?php
	try{
		$sql_create_table_commits = "CREATE TABLE IF NOT EXISTS Commits (
									commit_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									commit_comment VARCHAR(255) NOT NULL,                                    
                                    commit_time VARCHAR(255) NOT NULL,
                                    task_id INT(6) NOT NULL DEFAULT 0,
									FOREIGN KEY (task_id) REFERENCES Tasks(task_id)
								)";
		$state = $connection->exec($sql_create_table_commits);
		echo "Successfully created table for commits!";

		$sql_create_table_files = "CREATE TABLE IF NOT EXISTS Files (
									files_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									files_path VARCHAR(255) NOT NULL
								)";
		$state = $connection->exec($sql_create_table_files);
		echo "Successfully created table for files!";

		$sql_create_table_m2m = "CREATE TABLE IF NOT EXISTS Commit_Files (
							commit_id INT(6) UNSIGNED NOT NULL DEFAULT 0,
							files_id INT(6) UNSIGNED NOT NULL DEFAULT 0,                                    
							FOREIGN KEY (files_id) REFERENCES Files(files_id),
							FOREIGN KEY (commit_id) REFERENCES Commits(commit_id),
							PRIMARY KEY (commit_id, files_id)
						)";
		$state = $connection->exec($sql_create_table_m2m);
		echo "Successfully created many to many table!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}
?>