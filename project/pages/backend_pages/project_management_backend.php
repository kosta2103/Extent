<?php
    require_once('../database_connection.php');
    $projectNameErr = $projectReservationErr = $projectInvestorErr = ""; 

    if(isset($_POST["submitProject"]))
    {
        $projectName = $_POST["projectName"];
        $projectManager = $_POST["projectManager"];
        $projectReservation = $_POST["reservation"];
        $projectInvestor = $_POST["projectInvestor"];
        $projectNotes = $_POST["notes"];

        if(empty($projectName) && empty($projectReservation) && empty($projectInvestor))
        {
            $projectNameErr = "* Morate uneti ime projekta";
            $projectReservationErr = "* Morate uneti rok za projekat";
            $projectInvestorErr = "* Morate uneti investitora";
        }
        else if(empty($projectName)){
            $projectNameErr = "* Morate uneti ime projekta";
        } else if(empty($projectReservation)){
            $projectReservationErr = "* Morate uneti rok za projekat";
            //header("Location: project_management.php");
        } else if (empty($projectInvestor)){
            $projectInvestorErr = "* Morate uneti investitora";
            //header("Location: project_management.php");
        }

        try{
            $sql_insert_project = "INSERT INTO Projects VALUES(NULL, '$projectName', '$projectManager', '$projectReservation', '$projectInvestor', '$projectNotes')";
            $stmt = $connection->prepare($sql_insert_project);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $message = "Projekat je uspešno ubačen";
            }
            /*$projectName = "";
            $projectManager = "";
            $projectReservation = "";
            $projectInvestor = "";
            $projectNotes = "";*/
           
            header("Location: project_management.php");
            
        }catch(Exception $e){
            echo $e->getMessage();
        }finally{
            $connection = null;
        }
    } else {
        $projectName = "";
        $projectManager = "";
        $projectReservation = "";
        $projectInvestor = "";
        $projectNotes = "";
    }

?>