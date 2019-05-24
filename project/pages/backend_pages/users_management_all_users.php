<?php
	require_once('../database_connection.php');
	try{
		$sql_query = "SELECT * FROM User";
		$stmt = $connection->prepare($sql_query);
		$stmt->execute();
		$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>