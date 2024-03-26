<?php

if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set the email headers.
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: $name <kislayyadav02@gmail.com>" . "\r\n";

  // Replace 'your_email@example.com' with the actual recipient email address
  $to = 'kislayyadav8896@gmail.com';  

  // Send the email.
  $sent = mail($to, $subject, $message, $headers);

  if ($sent) {
    // Redirect the user to a success page.
    header('Location: success.php');
  } else {
    // Display an error message if email fails to send
    echo 'Error sending email!';
  }
}

?>
