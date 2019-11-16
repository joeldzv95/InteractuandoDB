<?php

$server = 'localhost';
$username = 'calendar';
$password = '';
$database = 'calendaruser';


try {
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username ,$password);

} catch (PDOException $e) {
    die('Connected Failed : ' .$e->getMessage());

}

?>