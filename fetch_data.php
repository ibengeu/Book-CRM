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

 if ($method == "POST"){
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $firstname =$_POST['firstname'];
    $institution = $_POST['institution'];


    echo $id;

    $sql = "UPDATE authors SET firstname='$firstname', lastname = '$lastname', institution = '$institution' WHERE authorid= $id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

if ($stmt->execute() === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

 }





?>
