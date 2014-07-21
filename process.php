<?php
	require 'vendor/autoload.php';

	$sendgrid = new SendGrid('name', 'email');
	$email    = new SendGrid\Email();
	$email->addTo('schaudhry123@gmail.com')->
  	setFrom('schaudhry123@gmail.com')->
  	setSubject('Zscaler Vacation Form Submission')->
   	setText('Hello World!')->
   	setHtml('<strong>Hello World!</strong>');

	$sendgrid->send($email);
?>
<p>Your email has been sent.</p>