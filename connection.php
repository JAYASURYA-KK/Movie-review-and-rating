<?php
$host = "wb.kongu.edu";      // Database host
$user = "24cseb25";           // Database username
$password = "24cseb25";           // Database password
$database = "24cseb25"; // Replace with your database name

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Uncomment the line below to confirm connection
 echo "Connected successfully";
?>
