<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'vendor/autoload.php'; // Path to PHPMailer autoload.php
require './PHPMailer-6.9.1/PHPMailer-6.9.1/src/PHPMailer.php'; 
require './PHPMailer-6.9.1/PHPMailer-6.9.1/src/Exception.php';  
require './PHPMailer-6.9.1/PHPMailer-6.9.1/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST['email'];

    // Validate the email (you can add more validation if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $statusMsg = 'Please enter a valid email address.';
    } else {
        // Add your code to store the email in a database or send it to a mailing list service

        // For demonstration purposes, let's assume the subscription is successful
        $statusMsg = 'Thank you for subscribing!';

        // Send a confirmation email to the subscriber
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'patanvadiyaanjali@gmail.com'; // Your SMTP username
            $mail->Password   = 'mgye pazn stac muhr'; // Your SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `ssl` also accepted
            $mail->Port       = 587; // TCP port to connect to

            //Recipients
            $mail->setFrom('patanvadiyaanjali@gmail.com', 'Patanvadiya Anjali');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Subscription Confirmation';
            $mail->Body    = 'Thank you for subscribing to our newsletter! You will receive the latest updates via email.';

            $mail->send();
        } catch (Exception $e) {
            $statusMsg = 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

    // Display the status message
    echo $statusMsg;
}

