<?php
	try{
		$connection->beginTransaction();
		$connection->exec("INSERT INTO User (first_name, last_name, username, password, email, phone_number, profession, profile_picture, role_id)
         VALUES ('John', 'Doe', 'JohnDoe', 'johndoe', 'johndoe@gmail.com', '060000000', 'developer', '', '1'),
         ('John1', 'Doe1', 'JohnDoe1', 'johndoe1', 'johndoe1@gmail.com', '060000001', 'developer', '', '1'),
         ('John2', 'Doe2', 'JohnDoe2', 'johndoe2', 'johndoe2@gmail.com', '060000002', 'developer', '', '1'),
         ('John3', 'Doe3', 'JohnDoe3', 'johndoe3', 'johndoe3@gmail.com', '060000003', 'developer', '', '1'),
         ('John4', 'Doe4', 'JohnDoe4', 'johndoe4', 'johndoe4@gmail.com', '060000004', 'pm', '', '2'),
         ('John5', 'Doe5', 'JohnDoe5', 'johndoe5', 'johndoe5@gmail.com', '060000005', 'pm', '', '2'),
         ('John6', 'Doe6', 'JohnDoe6', 'johndoe6', 'johndoe6@gmail.com', '060000006', 'pm', '', '2'),
         ('John7', 'Doe7', 'JohnDoe7', 'johndoe7', 'johndoe7@gmail.com', '060000007', 'pm', '', '2'),
         ('John8', 'Doe8', 'JohnDoe8', 'johndoe8', 'johndoe8@gmail.com', '060000008', 'tl', '', '3'),
         ('John9', 'Doe9', 'JohnDoe9', 'johndoe9', 'johndoe9@gmail.com', '060000009', 'tl', '', '3'),
         ('John10', 'Doe10', 'JohnDoe10', 'johndoe10', 'johndoe10@gmail.com', '060000010', 'tl', '', '3'),
         ('John11', 'Doe11', 'JohnDoe11', 'johndoe11', 'johndoe11@gmail.com', '060000011', 'tl', '', '3'),
         ('John12', 'Doe12', 'JohnDoe12', 'johndoe12', 'johndoe12@gmail.com', '060000012', 'developer', '', '4'),
         ('John13', 'Doe13', 'JohnDoe13', 'johndoe13', 'johndoe13@gmail.com', '060000013', 'developer', '', '4'),
         ('John14', 'Doe14', 'JohnDoe14', 'johndoe14', 'johndoe14@gmail.com', '060000014', 'developer', '', '4'),
         ('John15', 'Doe15', 'JohnDoe15', 'johndoe15', 'johndoe15@gmail.com', '060000015', 'developer', '', '4')
         ");
		$connection->commit();
		echo "Successfully inserted roles!";
	}catch(PDOException $e){
		$connection->rollback();
		echo $e->getMessage();
	}
?>