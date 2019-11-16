<?php

    include 'database.php';
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];



    $sql = 'SELECT id, email, password FROM users WHERE email = :user';
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(':user',$user);
    $stmt -> execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
   if (count($results)>0 && password_verify($_POST['password'],$results['password'])) {
     echo 1;
     $_SESSION = $results;
   }else {
     echo 2;
   }




 ?>
