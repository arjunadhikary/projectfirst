<<<<<<< HEAD
<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];

$message=$_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_body = "User Name: $name.\n".
     "User Email: $visitor_email.\n".
     "User Message: $message.\n";
    
    $to = "learningdigitally0@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers)
    header("Location: contact.html");
=======
<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];

$message=$_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_body = "User Name: $name.\n".
     "User Email: $visitor_email.\n".
     "User Message: $message.\n";
    
    $to = "learningdigitally0@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers)
    header("Location: contact.html");
>>>>>>> 244543e4b83f5cdb3dad1ae70573217680bd8638
?>