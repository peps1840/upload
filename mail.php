<?php
if(isset($_POST['submit']))
{
	$email_to = "prachitruejain@gmail.com";

	$email_subject = 'New Enquiry';
		
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['message'];

	$success_message = "Thank you for contacting us...!";

	$headers = 	'From: '. $email . "\r\n" .
				'Reply-To: '. $email . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

	$email_message = 	"Full Name: " . $name . "\r\n" .
						"Email: " . $email . "\r\n" .
						"Message: " . $msg . "\r\n";


	mail($email_to, $email_subject, $email_message, $headers);

	echo $success_message;
}
?>