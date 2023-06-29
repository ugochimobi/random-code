<?php
// Validate and process the submitted form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Perform further validation and processing as needed
  
  // Example: Send an email notification to the editorial team
  $to = 'prime9jaonline@gmail.com';
  $from = $email;
  $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
  $headers = "From: $from";

  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo '<p>Your news tip has been submitted successfully. Thank you!</p>';
  } else {
    // Failed to send email
    echo '<p>Sorry, there was an error submitting your news tip. Please try again later.</p>';
  }
}
?>
