<?php
$prevURL = $_REQUEST['currentURL'];
	// email to send message to
	$mailto = "info@artisticimpressionscmr.com";

	/* Check all form inputs using check_input function */
	$name = $_POST['name'];
	$subject  = 'Contact Form: '.$_POST['subject'];
	$email    = $_POST['email'];
	$comments1 = $_POST['comments1'];
	$comments2 = $_POST['comments2'];

	/* prepare the message for the e-mail */
	$message = "The Artistic Impressions contact form has been submitted by:

	Name: $name
	E-mail: $email
	URL: $subject

	Comments:
	$comments1$comments2

	End of message
	";
	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70, "\r\n");


	$headers = 'From: ' .$_POST["email"]. "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	/* Send the message using mail() function */
	mail($mailto, $subject, $message, $headers);
	echo $mailto. $subject. $message. $headers;

	/* Redirect visitor to the thank you page */
	header('Location:'.$prevURL);
	exit();
?>