<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Validate and sanitize inputs (additional validation can be added)
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$subject = filter_var($subject, FILTER_SANITIZE_STRING);
$message = filter_var($message, FILTER_SANITIZE_STRING);

// Compose email message
$to = 'your-email@example.com';
$headers = "From: $name <$email>" . "\r\n";
$message = "Subject: $subject\n\n$message";

// Send email
if (mail($to, $subject, $message, $headers)) {
  echo 'Message sent successfully.';
} else {
  echo 'Error sending message.';
}
?>
