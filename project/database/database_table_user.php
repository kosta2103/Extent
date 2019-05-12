<?php
	require_once('../database_connection.php');
	try{
		$sql_create_table_user = "CREATE TABLE IF NOT EXISTS User (
									user_id INT(6) UNSIGNED AUTO_INCREMENT,
									first_name VARCHAR(30) NOT NULL,
									last_name VARCHAR(30) NOT NULL,
									username VARCHAR(30) NOT NULL,
									email VARCHAR(30) NOT NULL,
									phone_number VARCHAR(30) NOT NULL,
									profession VARCHAR(30) NOT NULL,
									profile_picture LONGBLOB,
									role_id INT(6) NOT NULL,
									PRIMARY KEY (user_id),
									FOREIGN KEY (role_id) REFERENCES Role(role_id)
								)";
		$connection->exec($sql_create_table_user);
		echo "Successfully created table!";
	}catch(PDOException $e){
		echo $sql_create_table_user . "<br>" . $e->getMessage();
	}finally{
		$connection = null;
	}
?>