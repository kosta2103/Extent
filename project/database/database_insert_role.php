<?php
	require_once('../database_connection.php');
	try{
		$connection->beginTransaction();
		$connection->exec("INSERT INTO Role (role_name) VALUES ('admin')");
		$connection->exec("INSERT INTO Role (role_name) VALUES ('project manager')");
		$connection->exec("INSERT INTO Role (role_name) VALUES ('team leader')");
		$connection->exec("INSERT INTO Role (role_name) VALUES ('executor')");
		$connection->commit();
		echo "Successfully inserted roles!";
	}catch(PDOException $e){
		$connection->rollback();
		echo $e->getMessage();
	}finally{
		$connection = null;
	}
?>