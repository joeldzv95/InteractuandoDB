<?php

    include 'database.php';
    session_start();
    $id=$_POST['id'];
    $startDate = $_POST['start_date'];
    $startHour = $_POST['start_hour'];
    $finalDate = $_POST['end_date'];
    $finalHour = $_POST['end_hour'];

    $sql = "UPDATE task SET initial_date = ? , initial_time = ? , final_date = ? , final_time = ? WHERE id= $id ";
    $stmt =  $conn->prepare($sql);
    $dataAc = $stmt->execute([$startDate,$startHour,$finalDate,$finalHour]);
    echo 1;
 ?>
