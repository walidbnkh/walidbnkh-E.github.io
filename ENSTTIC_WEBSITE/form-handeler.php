<?php
$name = $_POST['name']; 
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'info@ensttic.dz';
$email_subject = 'ensttic website mails';
$email_body = "user name : $name.\n".
              "visitor email: $visitor_email.\n " .
              "subject : subject.\n" .
              "user message: $message.\n" ;
$to = 'walidbenkhedda@yahoo.com';
$headers = "from: $email_from \r\n";
$headers .= "reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: CONTACT.html ");
?>


watch the last vido to see how to activate this