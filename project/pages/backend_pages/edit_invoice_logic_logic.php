<?php 
      session_start();
      require_once('../../database_connection.php');
      if(isset($_POST["edit"])){
            try{	
                  $id = $_POST['id'];
            	$sql_update = "UPDATE invoice SET project_id='" . $_POST['idproj'] . "', sender='" . $_POST['uplatilac'] . "', reciever='". $_POST['primalac'] . "', amount='" . $_POST['novac'] . "', time='" . $_POST['vreme'] . "', purpose='" . $_POST['svrha']. "', comment='" . $_POST['komentar']. "' WHERE invoice_id='$id'";
            	$stmt = $connection->prepare($sql_update);
            	$stmt->execute();
            	header('Location: ../invoice.php');
            	}catch(Exception $e){
            		echo $e->getMessage();
            	}finally{
            		$connection = null;
            }

      }
?>