<?php
	require_once("../../database_connection.php");
	$invoice_id = $_POST["hidden_field_invoice"]; 
	try{
		$sql_delete_query = "DELETE FROM invoice WHERE invoice_id='$invoice_id'";
		$connection->exec($sql_delete_query);
		header("Location: ../invoice.php");
	}catch(PDOException $e){

	}finally{
		$connection = null;
	}
?>