<?php
    include 'database.php';
    session_start();

    $idSession=$_SESSION['id'];
    $title = $_POST['titulo'];
    $startDate = $_POST['start_date'];
    $startHour = $_POST['start_hour'];
    $finalDate = $_POST['end_date'];
    $finalHour = $_POST['end_hour'];
    $allDay = $_POST['allDay']; 
    $allDayB = null;
    
    if ($allDay == 'true') {
        $allDayB = 1;
    }else {
        $allDayB = 0;
    }
    

    $sql = "INSERT INTO task (id_user , title, initial_date, initial_time, final_date, final_time, complet_day) VALUES (:id_user, :title, :initial_date, :initial_time, :final_date, :final_time, :allDay ) ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_user',$idSession);
    $stmt->bindParam(':title',$title);
    $stmt->bindParam(':initial_date',$startDate);
    $stmt->bindParam(':initial_time',$startHour);
    $stmt->bindParam(':final_date',$finalDate);
    $stmt->bindParam(':final_time',$finalHour);
    $stmt->bindParam(':allDay',$allDayB); 


    if ($stmt->execute()) {
        echo 1;
    } 
    
 
    


    

    

 ?>
