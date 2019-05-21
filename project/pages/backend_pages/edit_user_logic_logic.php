<?php 
      require_once('../../database_connection.php');
      if(isset($_POST["register"])){
            try{
                  $role_id = 0;
                  switch ($_POST["role"]) {
            		case 'Admin':
            			$role_id=1;
            			break;
      			case 'Project Manager':
					$role_id=2;
      				break;
				case 'Team Leader':
            			$role_id=3;
            			break;
            		case 'Executor':
            			$role_id=4;
            			break;
            		default:
            			break;
                  }
            			
                  $id = $_POST['id'];
            	$sql_update = "UPDATE User SET first_name='" . $_POST['fname'] . "', last_name='" . $_POST['lname'] . "', username='". $_POST['username'] . "', password='" . $_POST['passwd'] . "', email='" . $_POST['mail'] . "', phone_number='" . $_POST['phonenum']. "', profession='" . $_POST['profession'] . "', profile_picture='" . $_POST['profilepic'] . "', role_id='$role_id' WHERE user_id='$id'";
            	$stmt = $connection->prepare($sql_update);
            	$stmt->execute();
            	header('Location: ../users_management_users_manipulation.php');
            	//header('Location: ../../index.html');
            	//$result = $stmt->fetch(PDO::FETCH_ASSOC);
            	}catch(Exception $e){
            		echo $e->getMessage();
            	}finally{
            		$connection = null;
            }

      }
?>