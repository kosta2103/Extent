<?php
	require_once('../database_connection.php');
	try{
		$sql_query = "SELECT * FROM Projects";
		$stmt = $connection->prepare($sql_query);
		$stmt->execute();
		$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		echo $e->getMessage();
	}finally{
		//$connection = null;
	}
?>