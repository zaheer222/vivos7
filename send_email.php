<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = "khajazaheer13@gmail.com";

  // Set the email subject
  $subject = "New Contact Form Submission";

  // Set the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message\n";

  // Set the email headers
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";

  // Send the email
  if (mail($to, $subject, $email_content, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
