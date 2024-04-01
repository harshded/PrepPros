<?php
session_start();
require_once('db_connect.php');
// Process payment using Stripe or any other payment processing library

// After successful payment processing:
// 1. Retrieve user ID from the session or any other source
$user_id = $_SESSION['id']; // Assuming you have stored the user ID in the session

// 2. Update user type to "premium" in the database
$update_query = "UPDATE users SET user_type = 'premium' WHERE id = ?";
$stmt = $conn->prepare($update_query);
$stmt->bind_param("i", $user_id);

if ($stmt->execute()) {
    // User type updated successfully
    echo "<script>
            swal({
                title: 'Success!',
                text: 'User type updated to premium.',
                icon: 'success',
                button: 'OK',
            }).then(function() {
                window.location = 'payment_success.php';
            });
          </script>";
    exit();
} else {
    // Error updating user type
    echo "Error updating user type: " . $stmt->error;
}
?>
</body>
</html>