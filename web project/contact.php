<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Perform any necessary processing or database operations here

  // Send an email notification (example)
  $to = "contact@cocopeatstartup.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email";
  $mailBody = "Name: $name\nEmail: $email\nMessage: $message";

  mail($to, $subject, $mailBody, $headers);

  // Redirect user to a thank you page
  header("Location: thank_you.html");
  exit();
}
?>
