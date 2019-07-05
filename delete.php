<?php

$servername = "localhost";
$username = "root";
$password = '1234';
$db = "bookcrm";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



 
 $method = $_SERVER['REQUEST_METHOD'];

 if ($method == "POST") {
     
    $id = $_POST['id'];
     echo ".<br>";
     echo $id;
     $sql = "DELETE FROM authors WHERE authorid= '$id'";
     
 
     $stmt = $conn->prepare($sql);
     $stmt->execute();
 
     if ($stmt->execute() === true) {
         echo "Record deleted successfully";
     } else {
         echo "Error deleting record: " . $conn->error;
     }
 }

 ?>
 