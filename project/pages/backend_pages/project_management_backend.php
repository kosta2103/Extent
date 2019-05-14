<?php
    require_once('../database_connection.php');
    $projectNameErr = $projectInvestorErr = ""; 

    if(isset($_POST["submitProject"]))
    {
        $projectName = $_POST["projectName"];
        $projectManager = $_POST["projectManager"];
        $projectReservation = $_POST["reservation"];
        $projectInvestor = $_POST["projectInvestor"];
        $projectNotes = $_POST["notes"];
        $id = 0;

        if(empty($projectName) && empty($projectInvestor))
        {
            $projectNameErr = "* Morate uneti ime projekta";
            $projectReservationErr = "* Morate uneti rok za projekat";
            $projectInvestorErr = "* Morate uneti investitora";
        }
        else if(empty($projectName)){
            $projectNameErr = "* Morate uneti ime projekta";
        } else if (empty($projectInvestor)){
            $projectInvestorErr = "* Morate uneti investitora";
        } else{

            try{
                $sql_insert_project = "INSERT INTO Projects(project_name, project_manager, project_deadline, project_investor, project_notes)
                                    VALUES('$projectName', '$projectManager', '$projectReservation', '$projectInvestor', '$projectNotes')";
                $stmt = $connection->prepare($sql_insert_project);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    $message = "Projekat je uspešno ubačen";
                }
                $projectName = "";
                $projectManager = "";
                $projectReservation = "";
                $projectInvestor = "";
                $projectNotes = "";
                $projectNameErr = $projectInvestorErr = ""; 
            
                header("Location: project_management.php");
                
            }catch(Exception $e){
                echo $e->getMessage();
            }finally{
                $connection = null;
            }
            }   
    }

?>