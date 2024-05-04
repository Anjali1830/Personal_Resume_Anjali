<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // If data inserted successfully, redirect to success page or display success message
        echo "Message sent successfully";
        // You can redirect to a success page using header function if needed
        header("Location: Suceess.php");
    } else {
        // If an error occurred, display error message
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

