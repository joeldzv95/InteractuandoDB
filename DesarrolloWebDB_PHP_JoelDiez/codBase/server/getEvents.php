<?php
  
    include 'database.php';
    session_start();

    $idSession=$_SESSION['id'];
    $sql = "SELECT * FROM task WHERE id_user=$idSession";
    $stmt = $conn->query($sql);  
    $stmt -> execute();
    $result = $stmt->fetchAll();
    
    
   // echo(json_encode($result, JSON_FORCE_OBJECT));
    
    $eventOb = array();


   foreach ($result as $row ) {
        $events = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'start' => $row['initial_date']." ".$row['initial_time'],
            'end' => $row['final_date']." ".$row['final_time'],
            'allDay' => $row['complet_day']

        );
        
        array_push($eventOb, $events);
        
    }

    echo json_encode($eventOb);
    

    //echo 1;


    


 ?>
