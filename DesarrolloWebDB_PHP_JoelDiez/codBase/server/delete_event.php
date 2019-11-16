<?php
    include 'database.php';
    session_start();
    $id = $_POST['id'];

    $sql = "DELETE FROM task WHERE id =$id";
    $stmt = $conn->prepare($sql);
    $ok = $stmt->execute(array($id));
    echo 1;
    
    
    

 ?>
