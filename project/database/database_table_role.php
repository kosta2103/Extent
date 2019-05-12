<?php
	require_once('../database_connection.php');
	try{
		$sql_create_table_role = "CREATE TABLE IF NOT EXISTS Role (
									role_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									role_name VARCHAR(30) NOT NULL
								)";
		$state = $connection->exec($sql_create_table_role);
		echo "Successfully created table!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}finally{
		$connection = null;
	}
?>