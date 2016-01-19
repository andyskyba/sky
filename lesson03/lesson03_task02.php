<?php
/*
Write custom function shuffle array
*/

//General settings
$start = microtime(TRUE);
$Arr = array();
$quantity = 10;

//Array init
//Fill in with values in order from 1 till $quantity
function arrayInit(&$array, $quantity){
	for ($i = 1; $i <= $quantity; $i++){
		$array[$i] = $i;
	}
}

function displayArray($array){
	echo "<br>Current array appearance: <br>";
	var_dump($array);
}

function shuffleArray(&$array){
	
//Create and init tem array
	$tempQuantity = count($array);
	$tempArr = array();
	for ($i = 0; $i < $tempQuantity; $i++){
		$tempArr[$i] = FALSE; 
	}

//Shuffle input array
	for($i = 1; $i <= $tempQuantity; $i++){
		while(TRUE){
			$temp = mt_rand(0, ($tempQuantity-1));
			if(!($tempArr[$temp])){ //if FALSE
				$tempArr[$temp] = $array[$i];
				break;
			} 
		}
	}
//Return result via link 
$array = $tempArr;
}

//MAIN LOOP
arrayInit($Arr, $quantity);
displayArray($Arr);
shuffleArray($Arr);
displayArray($Arr);

// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);