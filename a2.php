<?php
require('service.php');


$check = (isset($_GET['round']) ? $_GET['round'] : null);
$people = (isset($_GET['people']) ? $_GET['people'] : null);
$tab = (isset($_GET['tab']) ? $_GET['tab'] : null);
$total = null;
  
	if ($check == 'no') {
			
			$total = round ($tab / $people, 2, PHP_ROUND_HALF_UP);
			
		} 
	elseif ($check == 'yes') {
			
			$total = round ($tab / $people, 0, PHP_ROUND_HALF_UP);
			
		}
	
 
$feedback = new Service;
$feedback->message;
