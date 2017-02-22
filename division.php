<?php

class Division {
	
	
	function new_division() { 
	
		$check = (isset($_GET['round']) ? $_GET['round'] : null);
	$people = (isset($_GET['people']) ? $_GET['people'] : null);
	$tab = (isset($_GET['tab']) ? $_GET['tab'] : null);

	

		if ($check == 'no') {
		
			$this->$total = round ($tab / $people, 2, PHP_ROUND_HALF_UP);
		} 
		elseif ($check == 'yes') {
			$this->$total = round ($tab / $people, 0, PHP_ROUND_HALF_UP);
		}

			
 			
 
	}

	return $this->$total;
}