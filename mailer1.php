<?php 
	
	if ($_REQUEST) {	
	
		$prevURL = $_REQUEST['currentURL'];

		if (isset($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
		}
		else {
			$name = NULL;
		}

		if(isset($_REQUEST['email'])) {
			$email = $_REQUEST['email'];
		}

		if(isset($_REQUEST['subject'])) {
			$subject = $_REQUEST['subject'];
		}

		if(isset($_REQUEST['message'])) {
			$message = $_REQUEST['message'];
		}
				
		if (isset($name) && isset($email) && isset($subject) && isset($message)) {
			$message = $message.' | '.$email.' | '.$name;
			mail('info@artisticimpressionscmr.com', $subject);
			header('Location:'.$prevURL);
		}
	}

?>