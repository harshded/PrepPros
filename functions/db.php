<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = 'preppros';

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    // If connection fails, display an error message
    die("Connection failed: " . $conn->connect_error);
}
// } else {
//     // If connection succeeds, you can perform further database operations here
//     echo "Connection successful!";
// }

// It's good practice to close the connection when done
$conn->close();
?>
