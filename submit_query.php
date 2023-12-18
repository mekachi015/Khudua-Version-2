<?php

$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname -$POST["full-name"];
    $cellphone = $_POST["cellphone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}


//i recieve the confirmation email
$to = "abielmakoti@gmail.com";
$subject = "New Form Submission";
$message_body = "Full Name: $full_name\nCellphone: $cellphone\nEmail: $email\nMessage: $message";

mail($to, $subject, $message_body);

//Confirmation Email for Users
$to = $email; // Use the user's email address
$subject = "Thank you for your inquiry";
$message_body = "Dear $full_name,\n\nThank you for your inquiry. We have received the following message:\n\n$message";

mail($to, $subject, $message_body);

$success_message = "Thank You for your enquiry! We will be in contact shortly"

?>