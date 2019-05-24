<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["password"]);
	unset($_SESSION["user_id"]);
	unset($_SESSION["role_id"]);
	header("Location: ../login.php");
?>