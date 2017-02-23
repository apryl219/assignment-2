<?php require('working.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Assignment Two</title>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="a2.css">

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<h1>Bill Splitter</h1>
	<form method='GET'>
		<label for="people">Split how many ways? <span class="require"> *Required</span></label>
		<input type="text" name="people">
		<br>
		<label for="tab">How much was the tab?<span class="require"> *Required</span></label>
		<input type="text" name="tab">
		<br>
		<label for="service" method='POST'>How was the service?</label>
			<select name="service" id="">
				<option value="excellent">Excellent</option>
				<option value="fair">Fair</option>
				<option value="poor">Poor</option>
			</select><br>
		<label for="round">Round Up?</label>
		<input type="radio" name="round" value="yes" checked>Yes
		<input type="radio" name="round" value="no">No<br>
		<input class="submit" type="submit" value="Calculate"> 
	</form>
	
	<div>Each person owes: $ <?=$total;?></div>
	
	<div>Thank you for coming<br><?=$feedback->message;?></div>
	
</body>
</html>