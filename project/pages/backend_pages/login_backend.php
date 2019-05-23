<?php
	require_once('../database_connection.php');

	$email_err = $password_err = $credentials_err = "";
	$email = $password = "";
	if(isset($_POST["login"])){
		$email = $_POST["email"];
		$password = $_POST["password"];

		if(empty($email) && empty($password)){
			$email_err = "* EMAIL MUST BE ENTERED";
			$password_err = "* PASSWORD MUST BE ENTERED";
		}else if(empty($email)){
			$email_err = "* EMAIL MUST BE ENTERED";
		}else if(empty($password)){
			$password_err = "* PASSWORD MUST BE ENTERED";
		}else{
			try{
				$sql_select_user = "SELECT email, password FROM User WHERE email='$email' AND password='$password'";
				$stmt = $connection->prepare($sql_select_user);
				$stmt->execute();
				if($stmt->rowCount() > 0){
					$result = $stmt->fetch(PDO::FETCH_ASSOC);
					$_SESSION["email"] = $result["email"];
					$_SESSION["password"] = $result["password"];
					if(isset($_POST["chkbox"])){
						setcookie("email_cookie", $result["email"], time() + (84000*15));
						setcookie("password_cookie", $result["password"], time() + (84000*15));
					}else{
						if(isset($_COOKIE["email_cookie"])){
							unset($_COOKIE["email_cookie"]);
							setcookie("email_cookie", "", time() - 3600);
						}
						if(isset($_COOKIE["password_cookie"])){
							unset($_COOKIE["password_cookie"]);
							setcookie("password_cookie", "", time() - 3600);
						}
					}
					header("Location: ../index.php");
				}else{
					$credentials_err = "* DOESN'T EXIST USER WITH INPUT CREDENTIALS"; 
				}
			}catch(Exception $e){
				echo $e->getMessage();
			}finally{
				$connection = null;
			}
		}
	}
?>