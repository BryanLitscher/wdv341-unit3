<?php
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
				echo date_format($date,"d/m/Y");
				break;
			default;
		}
};


function textDisplay($string){
	echo "Length of \"" . $string . "\" is " . strlen($string) ."\n";
	$newString = trim($string);
	$newString = strtolower($newString);
	echo "\"" . $string . "\" trimmed and converted to lower case: \"" .$newString. "\"\n";
	echo  $newString . " " . ((stripos($newString, "DMACC")=== FALSE)?"does not contain": "contains") . " DMACC\n";
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



echo convertDate(1, "Aug 25, 1997") . "\n";
echo convertDate(2, "Aug 25, 1997") . "\n";
textDisplay("    Bryan is a dma cc student  ");
echo "Formatted Number: " . formatNumber(4545435454, "formatted_number") . "\n";
echo "US Currency: " . formatNumber(4545435454, "us_currency") . "\n";