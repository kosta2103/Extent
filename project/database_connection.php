<?php
	class DatabaseConnection{
		private $username;
		private $password;
		private $server_name;
		private $db_name;

		public function __construct($username, $password, $server_name, $db_name){
			$this->username = $username;
			$this->password = $password;
			$this->server_name = $server_name;
			$this->db_name = $db_name;
		}

		public function getDatabaseConnection(){
			$connection = null;
			try{
				$connection = new PDO("mysql:host=$this->server_name;dbname=$this->db_name", $this->username, $this->password);
				$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				echo "Connection to database failed -> " . $e->getMessage();
			}
			return $connection;
		}
	}

	$database_connection = new DatabaseConnection("root","","localhost","Extent");
	$connection = $database_connection->getDatabaseConnection();
?>