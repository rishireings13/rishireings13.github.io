<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'rishiabd@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
            "User Email: $visitors_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n".;


$to = 'rishiabd172gmail.com';

$headers = "From: $email_from \r\n";

$headers . = "Reply-To: "$visitors_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("location: contact.html");



?>