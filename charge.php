<?php
session_start();
require_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Processing</title>
    <!-- Include SweetAlert 2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
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
<<<<<<< Updated upstream
    // Display SweetAlert success message
    echo '<script>
            Swal.fire({
                title: "Payment Successful",
                text: "You have successfully upgraded to premium!",
                icon: "success",
                showConfirmButton: false,
                timer: 3000 // Close alert after 3 seconds
            }).then(() => {
                window.location.href = "resources.php"; // Redirect to resources page
            });
          </script>';
} else {
    // Error updating user type
    // Display SweetAlert error message
    echo '<script>
            Swal.fire({
                title: "Error",
                text: "Failed to upgrade to premium. Please try again later.",
                icon: "error",
                showConfirmButton: false,
                timer: 3000 // Close alert after 3 seconds
            }).then(() => {
                window.location.href = "payment.php"; // Redirect to payment page
            });
          </script>';
}
?>
</body>
</html>
=======
    // Redirect the user or display a success message
    header("Location: resources.php"); // Redirect to a payment success page
    exit();
} else {
    // Error updating user type
    // Handle error scenario
    echo "Error updating user type: " . $stmt->error;
}
?>
>>>>>>> Stashed changes
