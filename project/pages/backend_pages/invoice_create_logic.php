<?php
	require_once('../database_connection.php');
	require_once('invoice_management_model.php');

	$idproj_err = $sender_err = $reciever_err = $amount_err = $time_err = $purpose_err = $comment_err = "";
	$message = "";
	if(isset($_POST["create"])){
		$idproj_val = $_POST["idproj"];
		$sender_val = $_POST["sender"];
		$reciever_val = $_POST["reciever"];
		$amount_val = $_POST["amount"];
		$time_val = $_POST["time"];
		$purpose_val = $_POST["purpose"];
		$comment_val = $_POST["comment"];

		if(empty($idproj_val) || empty($sender_val) || empty($reciever_val) || empty($amount_val) || empty($time_val) || empty($purpose_val) || empty($comment_val)){
			if(empty($idproj_val)){
				$idproj_err = "* Ovo polje se mora uneti";
			}
			if(empty($sender_val)){
				$sender_err = "* Ovo polje se mora uneti";
			}
			if(empty($reciever_val)){
				$reciever_err = "* Ovo polje se mora uneti";
			}
			if(empty($amount_val)){
				$amount_err = "* Ovo polje se mora uneti";
			}
			if(empty($time_val)){
				$time_err = "* Ovo polje se mora uneti";
			}
			if(empty($purpose_val)){
				$purpose_err = "* Ovo polje se mora uneti";
			}
			if(empty($comment_val)){
				$comment_err = "* Ovo polje se mora uneti";
			}
		}
		else{
			$invoice = new InvoiceCrud($idproj_val,$sender_val,$reciever_val,$amount_val,$time_val,$purpose_val,$comment_val);
			//$message_fail = $invoice->uniqueUsernameAndEmail($connection);
			//if(empty($message_fail)){
				$message_success = $invoice->createInvoice($connection);
			//}
		}
 	}
?>