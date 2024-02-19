<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Gmail SMTP server settings
    ini_set("SMTP", "smtp.gmail.com");
    ini_set("smtp_port", 587);
    ini_set("sendmail_from", "your_email@gmail.com");

    $to = "your-email@example.com";  // Replace with your actual email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Display a thank you message using JavaScript
    echo '<script>alert("Thank you for your message! We will get back to you shortly.");</script>';
}
?>
