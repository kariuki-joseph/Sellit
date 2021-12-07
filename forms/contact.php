<?php
  //capture form data
session_start();
include '../dbConnect.php';

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  
  $sql = "INSERT INTO messages(name, email,subject,message) VALUES('$name','$email','$subject','$message')";
  $query = mysqli_query($conn, $sql);
  //check if query
  if ($query) {
    echo "Your message was successfully submitted. We will get back to you soon. Thakyou.";
  }else{
    echo "Unable to send your message at the moment. Please try again later.";
  }

?>
