<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Server-side validation (optional)

  // Email configuration (replace with your details)
  $to = 'your_email@example.com';
  $subject = 'Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = 'From: noreply@yourwebsite.com' . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'Content-Type: text/plain; charset=UTF-8';

  if (mail($to, $subject, $body, $headers)) {
    echo 'Form submitted successfully!';
  } else {
    echo 'Error sending email. Please try again.';
  }
} else {
  echo 'Invalid request
