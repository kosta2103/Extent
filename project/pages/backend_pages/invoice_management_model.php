<?php
	class InvoiceCrud{
		private $idproj;
		private $sender;
		private $reciever;
		private $amount;
		private $time_val;
		private $purpose;
		private $comment;

		public function __construct($idproj, $sender, $reciever, $amount, $time_val, $purpose, $comment){
			$this->idproj = $idproj;
			$this->sender = $sender;
			$this->reciever = $reciever;
			$this->amount = $amount;
			$this->time_val = $time_val;
			$this->purpose = $purpose;
			$this->comment = $comment;
		}

		public function createInvoice($conn){
			$message = "";
			
			try{
				$sql_create = "INSERT INTO invoice (project_id, sender, reciever, amount, time, purpose, comment) VALUES('$this->idproj', '$this->sender', '$this->reciever', '$this->amount', '$this->time_val', '$this->purpose', '$this->comment')";
				$result = $conn->prepare($sql_create);
				$result->execute();
				if($result->rowCount() > 0){
					$message = "Uplata je uspešno napravljena!";
				}

				return $message;
			}catch(Exception $e){
				echo "Neuspešno napravljena prijava -> " . $e->getMessage();
			}finally{
				$conn = null;
			}
		}

		public function uniqueUsernameAndEmail($conn){
			$message = "";

			try{
				$sql_select_email = "SELECT * FROM User WHERE email='$this->mail'";
				$sql_select_username = "SELECT * FROM User WHERE username='$this->username'";
				$result_email = $conn->prepare($sql_select_email);
				$result_email->execute();
				$result_username = $conn->prepare($sql_select_username);
				$result_username->execute();
				
				if($result_username->rowCount() > 0 && $result_email->rowCount() > 0){
					$message = "Postoji već korisnik sa unetim mejlom i korisničkim imenom!";
				}else if($result_username->rowCount() > 0){
					$message = "Postoji već korisnik sa unetim korisničkim imenom!";
				}else if($result_email->rowCount() > 0){
					$message = "Postoji već korisnik sa unetim mejlom!";
				}

				return $message;
			}catch(Exception $e){
				echo $e->getMessage();
			}finally{
				$conn = null;
			}
		}
	}
?>