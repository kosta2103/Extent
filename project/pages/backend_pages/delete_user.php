<?php
	require_once("../../database_connection.php");
	$username = $_POST["hidden_field"]; 
	try{
		$sql_delete_query = "DELETE FROM User WHERE username='$username'";
		$connection->exec($sql_delete_query);
		header("Location: ../users_management_users_manipulation.php");
	}catch(PDOException $e){

	}finally{
		$connection = null;
	}
?>