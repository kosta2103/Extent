<?php 
	require_once("../database_connection.php");
	try{
		$sql_id = "SELECT user_id FROM User";
		$stmt = $connection->exec($sql_id);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		echo $user_idd = $result['user_id'];
	}catch(Exception $e){
		echo $e->getMessage();
	}finally{
		$connection = null;
	}
?>