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
    $lastname= $_POST['lastname'];
    $firstname= $_POST['firstname'];
    $Address= $_POST['Address'];
    $city= $_POST['city'];
    $Region= $_POST['Region'];
    $country= $_POST['country'];
    $postal= $_POST['postal'];
    $email= $_POST['email'];
    $id= $_POST['id'];


    echo $id;

    $sql = "UPDATE employees SET firstname='$firstname', lastname = '$lastname', Address = '$Address', City = '$city' , Region = '$Region', Postal = '$postal', Email = '$email'
           WHERE EmployeeID= $id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

if ($stmt->execute() === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
 }                      



?>