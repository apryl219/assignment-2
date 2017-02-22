<?php

class Service {

public function __construct() {

$service = (isset($_GET['service']) ? $_GET['service'] : null);
$feedback = (isset($_POST['service']) ? $_POST['service'] : null);

   	if ($service == 'excellent') {
		$feedback = "We're so happy you enjoyed your meal!";
	}
	elseif ($service == 'fair') {
		$feedback = "What can we do to make your experience better?";
	}
	else {
		$feedback = "We're so sorry you had an unacceptable experience. We will send a manager over to discuss the issue.";
	}
	}
}