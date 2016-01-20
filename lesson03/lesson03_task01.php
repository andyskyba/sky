<?php
/*
Lesson 3
Task 1
Find the shortest way from A to B
*/

//General settings
//ob_start(); //For cleart screen 
$start = microtime(TRUE); //Time execution
$arrayBoard = array();
$boardSize = 10;

$pointA = array(0 => 2, 1 => 8); //Where 0 is "y" and 1 is "x"
$pointB = array(0 => 9, 1 => 1);  //Where 0 is "y" and 1 is "x"

//Create board
function generateArray(&$array, $size){
	for($i = 0; $i < $size; $i++ ){
		for($j = 0; $j < $size; $j++){
			$array[$i][$j] = mt_rand(0,1);
		}
	}
}
//Display board
function displayBoard($array){
	echo "<br>";
	for($i = 0; $i < count($array); $i++ ){
		for($j = 0; $j < count($array); $j++){
			echo '<font color="red">'.$array[$i][$j].'</font>';
		}
		echo "<br>";
	}
}

function goToGoal(&$array, $a, $b){
	
	
	while(TRUE){
		break;
	}
}

//EXECUTE EXISTING FUNCTIONS HERE


generateArray($arrayBoard, $boardSize);
displayBoard($arrayBoard);
goToGoal($arrayBoard, $pointA, $pointB);


//var_dump($arrayBoard);

//ob_end_clean(); // 
// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);