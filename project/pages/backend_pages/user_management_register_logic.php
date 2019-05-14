<?php
	require_once('../database_connection.php');
	require_once('user_management_model.php');

	$first_name_err = $last_name_err = $username_err = $email_err = $password_err = $phone_number_err = $profession_err = "";
	$message = "";
	if(isset($_POST["register"])){
		$first_name = $_POST["fname"];
		$last_name = $_POST["lname"];
		$username = $_POST["username"];
		$email = $_POST["mail"];
		$password = $_POST["passwd"];
		$phone_number = $_POST["phonenum"];
		$profile_picture = $_POST["profilepic"];
		$role_name = $_POST["role"];
		$profession = $_POST["profession"];
		$role_id = 0;

		switch ($role_name) {
			case 'Admin':
				$role_id = 1;
				break;
			case 'Project Manager':
				$role_id = 2;
				break;
			case 'Team Leader':
				$role_id = 3;
				break;
			case 'Executor':
				$role_id = 4;
				break;
		}

		if(empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password) || empty($phone_number) || empty($profession)){
			if(empty($first_name)){
				$first_name_err = "* Ovo polje se mora uneti";
			}
			if(empty($last_name)){
				$last_name_err = "* Ovo polje se mora uneti";
			}
			if(empty($username)){
				$username_err = "* Ovo polje se mora uneti";
			}
			if(empty($email)){
				$email_err = "* Ovo polje se mora uneti";
			}
			if(empty($password)){
				$password_err = "* Ovo polje se mora uneti";
			}
			if(empty($phone_number)){
				$phone_number_err = "* Ovo polje se mora uneti";
			}
			if(empty($profession)){
				$profession_err = "* Ovo polje se mora uneti";
			}
		}else if(!preg_match('/^[0-9-\/ ]*$/', $phone_number)){
				$phone_number_err = "*U polje se mogu uneti samo brojevi i znakovi - / kao i razmak";
		}
		else{
			$user = new UserCrud($first_name,$last_name,$username,$password,$email,$phone_number,$profession,$profile_picture,$role_id);
			$message_fail = $user->uniqueUsernameAndEmail($connection);
			if(empty($message_fail)){
				$message_success = $user->createUser($connection);
			}
		}
 	}
?>