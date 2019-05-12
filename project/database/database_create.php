<?php
	$username = "root";
	$password = "";
	$server_name = "localhost";

	try{
		$connection = new PDO("mysql:host=$server_name", $username, $password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql_create_database = "CREATE DATABASE IF NOT EXISTS Extent";
		$connection->exec($sql_create_database);
		echo "Successfully created!";
	}catch(PDOException $e){
		echo $e->getMessage();
	}finally{
		$connection = null;
	}
?>