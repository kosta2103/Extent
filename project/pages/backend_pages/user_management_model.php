<?php
	class UserCrud{
		private $first_name;
		private $last_name;
		private $username;
		private $password;
		private $mail;
		private $phone_number;
		private $profession;
		private $profile_picture;
		private $role_id;

		public function __construct($first_name, $last_name, $username, $password, $mail, $phone_number, $profession, $profile_picture, $role_id){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->username = $username;
			$this->password = $password;
			$this->mail = $mail;
			$this->phone_number = $phone_number;
			$this->profession = $profession;
			$this->profile_picture = $profile_picture;
			$this->role_id = $role_id;
		}

		public function createUser($conn){
			$message = "";
			
			try{
				$sql_create = "INSERT INTO User(first_name, last_name, username, password, email, phone_number, profession, profile_picture, role_id) VALUES('$this->first_name', '$this->last_name', '$this->username', '$this->password', '$this->mail', '$this->phone_number', '$this->profession', '$this->profile_picture', '$this->role_id')";
				$result = $conn->prepare($sql_create);
				$result->execute();
				if($result->rowCount() > 0){
					$message = "Korisnik je uspešno registrovan!";
				}

				return $message;
			}catch(Exception $e){
				echo "Neuspešno registrovan korisnik -> " . $e->getMessage();
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