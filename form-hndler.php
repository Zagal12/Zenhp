<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message= $_post['message'];

$email_form = 'https://zagal12.github.io/Zenhp/';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n"
              "user Email: $visitor_email.\n"
              "subject: $subject.\n"
              "user Message: $message.\n";

$to = 'randasagal@gmail.com';

$headers = "form: $email_form \r\n";

$headers .="Reply_to: $visitor_email\r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location. cuntact.html.html");
?>
