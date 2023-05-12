<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "your-email@example.com";
  $subject = "New Form Submission";
  $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
  $headers = "From: " . $email;
  
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your submission!";
  } else {
    echo "An error occurred while sending the email.";
  }
}
?>
