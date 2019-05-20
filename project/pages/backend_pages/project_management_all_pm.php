<?php
	require_once('../database_connection.php');
	try{
		$sql_query = "SELECT username FROM User WHERE role_id=2";
		$stmt = $connection->prepare($sql_query);
		$stmt->execute();
		$pms = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		echo $e->getMessage();
	}finally{
		//$connection = null;
	}
?>