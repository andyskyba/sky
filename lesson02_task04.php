<?php 

//general settings
$quantity = 10;
$minVal = 1;
$maxVal = 100;
$Arr = [];

//fulfill array with random values
//mt_rand() faster than rand()
	for ($i = 0; $i < $quantity; $i++){
		$Arr[$i] = mt_rand($minVal, $maxVal); 
	}

var_dump($Arr);

//calculate sum $Arr
$sumArr = 0;
foreach ($Arr as $value) {
	$sumArr += $value;
}
print "<br>$sumArr";


