<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Send email notification
    $to = 'your-email@example.com';
    $subject = 'New league member inquiry';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your interest. We will be in touch soon.';
    } else {
        echo 'There was a problem sending your message. Please try again later.';
    }
}
?>
