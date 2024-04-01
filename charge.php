<?php
require_once('vendor/autoload.php'); // Include Stripe PHP library

\Stripe\Stripe::setApiKey('sk_test_51OlBkrSF7CoYVXRggQ4lpiAz6wy5dAXsUYFZ14TOvEaFEiRF9rsZt3ZFRQkPgp71JY3yuvRe2Z0YQAmwvjHoeXMd00Fvopui3X');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['stripeToken'];
    $amount = 1000; // Amount in cents
    $description = "Premium Membership"; // Description of the payment
    try {
        $charge = \Stripe\Charge::create(array(
            'amount' => $amount,
            'currency' => 'usd',
            'description' => $description,
            'source' => $token,
        ));
        // If payment is successful, update user status to premium in your database
        update_user_status($_POST['card_holder_name']); // Update user status to premium
        // Redirect to a thank you page or display a success message
        echo "Payment successful!";
    } catch (\Stripe\Exception\CardException $e) {
        // If card is declined
        echo "Error: " . $e->getError()->message;
    }
}

function update_user_status($card_holder_name) {
    // Add your database connection code here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "preppros";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape any special characters to prevent SQL injection
    $card_holder_name = $conn->real_escape_string($card_holder_name);

    // Update user status to premium in the database
    $sql = "UPDATE users SET user_status = 'premium' WHERE card_holder_name = '$card_holder_name'";

    if ($conn->query($sql) === TRUE) {
        // User status updated successfully
        echo "User status updated to premium.";
    } else {
        // Error updating user status
        echo "Error updating user status: " . $conn->error;
    }

    $conn->close();
}
?>
