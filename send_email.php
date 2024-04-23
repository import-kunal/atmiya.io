<?php
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subjects = $_POST['subject'];
    $mes = $_POST['message'];

    $to = 'storage.kunalwaghmare@gmail.com';
    $subject = 'New Contact Form Submission';
    $message = "Hey! we have got new enquiry submission for the real-estate project from website.\n Here are the deatails mentioned below\n\n";    
    $message .= "Name: $name\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Message: $mes\n";

    $headers = "From: $email\r\nReply-To: $email";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        $msg = "success";
    } else {
        $msg = "error";
    }

    // Return the response
    header("Location: contact.php?status=" . $msg);
        exit();
} 
