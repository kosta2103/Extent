<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["password"]);
	unset($_SESSION["user_id"]);
	unset($_SESSION["role_id"]);
	unset($_SESSION["profile_picture"]);
	unset($_SESSION["first_name"]);
	unset($_SESSION["last_name"]);
	unset($_SESSION["profession"]);
	header("Location: ../login.php");
?>