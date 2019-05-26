<?php
	try{
		$sql_create_table_invoice = "CREATE TABLE `invoice` 
		(
			`invoice_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
			`sender` varchar(40) NOT NULL,
			`reciever` varchar(40) NOT NULL,
			`amount` float NOT NULL,
			`time` datetime NOT NULL,
			`purpose` varchar(100) NOT NULL,
			`comment` varchar(200) NOT NULL,
			PRIMARY KEY (`invoice_id`)
		)";
		$state = $connection->exec($sql_create_table_projects);
		echo "Uspešno napravljena tabela Invoices!";
	}catch(PDOException $e){
		echo $e->getMessage(); 
	}
?>