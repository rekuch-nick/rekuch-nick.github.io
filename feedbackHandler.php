<?php

header('Location: thanks.html');

$myemail = 'nrekuch@ivytech.edu';
$name = $_POST['name'];
$email_address = $_POST['contact'];
$message = $_POST['message'];
 

$to = $myemail;
$email_subject = "New form submission";
$email_body = "You have received a new message. \n".
	" User $name \n
	Contact $email_address \n 
	Message \n $message";


mail($to,$email_subject,$email_body);



?>
