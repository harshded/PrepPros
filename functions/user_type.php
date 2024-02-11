<?php
// Start session
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = 'preppros';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user type based on user ID
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    
    // Prepare and bind the SQL statement
    $sql = "SELECT user_type FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userType = $row['user_type'];

        // Set the user type in a session variable
        $_SESSION['user_type'] = $userType;
    } else {
        echo "User not found.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
