<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "katduquevt@gmail.com"; // Replace with your email
    
    // Set the email subject
    $subject = "New message from $name";
    
    // Set the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";
    
    // Set the email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send your message. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect back to the contact page
    header("Location: contact.html");
}
?>
