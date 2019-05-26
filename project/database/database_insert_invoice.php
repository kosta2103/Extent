<?php
	try{
		$connection->beginTransaction();
		$connection->exec("INSERT INTO invoice (project_id, sender, reciever, amount, time, purpose, comment)
         VALUES ('1', 'Koko', 'Kosta', '1345.66', '2019-03-07 00:05:00', 'Jer tako je u mogutjnosti', 'Nasumicni komentar 1'),
		 ('1', 'Shone', 'Samar', '66645.66', '2013-05-07 00:04:00', 'Jer tako je u mogutjnosti 1', 'Nasumicni komentar 2'),
		 ('1', 'Markovixxx', 'Babixxx', '177777.66', '2012-03-07 00:05:00', 'Jer tako je u mogutjnosti dada', 'Nasumicni komentar 3')
         ");
		$connection->commit();
		echo "Uspešno dodate transakcije novca!";
	}catch(PDOException $e){
		$connection->rollback();
		echo $e->getMessage();
	}
?>