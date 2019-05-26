<?php
	require_once('../database_connection.php');
	try{
		$sql_query = "SELECT * FROM invoice";
		$stmt = $connection->prepare($sql_query);
		$stmt->execute();
		$invoice = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>