<?php
require('division.php');
$people = (isset($_GET['people']) ? $_GET['people'] : null);
$tab = (isset($_GET['tab']) ? $_GET['tab'] : null);
$service = (isset($_GET['service']) ? $_GET['service'] : null);
$check = (isset($_GET['round']) ? $_GET['round'] : null);

   	if ($service == 'excellent') {
		$feedback = "We're so happy you enjoyed your meal!";
	}
	elseif ($service == 'fair') {
		$feedback = "What can we do to make your experience better?";
	}
	else {
		$feedback = "We're so sorry you had an unacceptable experience. We will send a manager over to discuss the issue.";
	}

	
	

	$total = new Division();
	$total->new_division();
 

