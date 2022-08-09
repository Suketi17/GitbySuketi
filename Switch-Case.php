<?php 
$month = 2;
$year = 2022;

switch ($month) {
	case 2: // lồng if else
		if ($year % 4 == 0) {
			echo "Tháng ".$month. " có 29 ngày!"; 
		}else{
			echo "Tháng ".$month. " có 28 ngày!";
		}
		
	break;

	case 4;
	case 6;
	case 9;
	case 11;
		echo "Tháng ".$month. " có 30 ngày!";
	
	default:
		echo "Tháng ".$month. " có 31 ngày!";
	break;
}
?>