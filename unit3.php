<?php
//http://localhost/wdv341/unit3/unit3.php

$test_string = "    Bryan is a dmacc student  ";
$date_string = "Aug 25, 1997";
$test_number = 4545435454;

//Date formate definitions
//https://docs.oracle.com/cd/E41183_01/DR/Date_Format_Types.html
function convertDate($format_type, $supplied_date)
{
		switch 	($format_type){
			case 1;
				$date=date_create($supplied_date);
				return date_format($date,"m/d/Y");
				break;
			case 2;
				$date=date_create($supplied_date);
				return date_format($date,"d/m/Y");
				break;
			default;
		}
};


function textDisplay($string){
	echo "<p>Length of \"" . $string . "\" is " . strlen($string) . "</p>\n";
	$newString = trim($string);
	$newString = strtolower($newString);
	echo "<p>\"" . $string . "\" trimmed and converted to lower case: \"" .$newString. "</p>\n";
	echo  "<p>\"" . $newString . "\" " . ((stripos($newString, "DMACC")=== FALSE)?"does not contain": "contains") . " DMACC</p>\n";
}

function formatNumber( $n, $formatType ){
	switch ( $formatType ){
		case "formatted_number":
			return number_format($n);
			break;
		case "us_currency":
			return "$" . number_format($n, 2);
			break;
		
	}
}





?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WDV341 Intro PHP Unit 3</title>
		<style>
			body{background-color:linen}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="scripts.js"></script> -->
	<script>
	$(document).ready(
		function(){
			//code after page loads
		}
	)
	
	</script>	
	


	</head>

	<body>
	
	
	<?php
	echo "<p>$date_string to mm/dd/yyyy format:" . convertDate(1, $date_string) . "</p>\n";
	echo "<p>$date_string to dd/mm/yyyy format:"  . convertDate(2, $date_string) . "</p>\n";
	textDisplay($test_string);
	echo "<p>$test_number to Formatted Number: " . formatNumber($test_number, "formatted_number") . "</p>\n";
	echo "<p>$test_number to US Currency: " . formatNumber($test_number, "us_currency") . "</p>\n";
	?>

	</body>
	
	


</html>