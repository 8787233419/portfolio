<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "23b0608@iitb.ac.in";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";


    $email_message = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $email_message, $headers);

    exit();
  }
