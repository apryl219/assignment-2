<?php

class Division {
	
	
	function __construct() { 
	
	$check = (isset($_GET['round']) ? $_GET['round'] : null);
	$people = (isset($_GET['people']) ? $_GET['people'] : null);
	$tab = (isset($_GET['tab']) ? $_GET['tab'] : null);
	$total = NULL;
	settype($total, 'int');
	settype($total, 'float');
	

		if ($check == 'no') {
		
			$total = round ($tab / $people, 2, PHP_ROUND_HALF_UP);
		
		} 
		elseif ($check == 'yes') {
			$total = round ($tab / $people, 0, PHP_ROUND_HALF_UP);
			
		}
	}
}


