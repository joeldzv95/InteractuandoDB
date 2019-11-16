<?php

    include 'database.php';
 

    
    $emails = ['user1@calendar.com' , 'user2@calendar.com' , 'user3@calendar.com'];
    $password = ['12345' , '12345' , '12345'];
    $names = ['Juan' , 'Oscar' , 'David'];
    $lastnames = ['Rodriguez' , 'Gonzales' , 'Ariza'];
    $born_dates = ['2019-10-03' , '2019-10-03' , '2019-10-03'];


    $sql = "INSERT INTO users (email, password, name, lastname, born_date) VALUES (:email, :password, :name, :lastname, :born_date)";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(':email',$email);
    $stmt -> bindParam(':password',$pass);
    $stmt -> bindParam(':name',$name);
    $stmt -> bindParam(':lastname',$lastname);
    $stmt -> bindParam(':born_date',$born_date);

    //primer ususario
    $email = $emails[0];
    $pass = password_hash($password[0], PASSWORD_BCRYPT);
    $name = $names[0];
    $lastname = $lastnames[0];
    $born_date = $born_dates[0];    
    $stmt->execute();
    //segundo usuario
    $email = $emails[1];
    $pass = password_hash($password[1], PASSWORD_BCRYPT);
    $name = $names[1];
    $lastname = $lastnames[1];
    $born_date = $born_dates[1];    
    $stmt->execute();
    //tercer usuario
    $email = $emails[2];
    $pass = password_hash($password[2], PASSWORD_BCRYPT);
    $name = $names[2];
    $lastname = $lastnames[2];
    $born_date = $born_dates[2];    
    $stmt->execute();

 ?>
