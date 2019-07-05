
<?php
$servername = "localhost";
$username = "root";
$password = '1234';
$db = "bookcrm";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);



$viewQuery = "SELECT * FROM books";
$execute = $conn->query($viewQuery);

?>

