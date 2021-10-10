<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];


$email_from= 'myaccandi@gmail.com';

$email_subject = "New form Submission";

$EMAIL_BODY="User name: $name.\n".
"user Email: $visitor_email.\n".
"user message: $message.\n";

$to ="info@myaccountantandi.com";
$headers ="From: $email_from \r\n";
$headers ="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>