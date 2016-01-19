<?php 

//General setting
$quantity = 10;
$min = 0;
$max = 100;
$Arr = array(); 

for($i = 0; $i < $quantity; $i++){
	$Arr[$i] = mt_rand(0,100);
}

rsort($Arr,SORT_NUMERIC); 

$halfSum = (int)(array_sum($Arr) / 2);
//$halfSum = intval(array_sum($Arr) / 2); 


$ArrOne = array(); 
$ArrTwo = array(); 
$sumOne = 0; 
$sumTwo = 0; 

foreach($Arr as $val){
 
    if($sumOne <= $sumTwo || $sumTwo >= $halfSum){
        $ArrOne[] = $val;
        $sumOne += $val;
    } else {
        $ArrTwo[] = $val;
        $sumTwo += $val;
    }
}

//Display results
var_dump($Arr);
echo " :Sum original = ".array_sum($Arr);
echo "<br><br>";
var_dump($ArrOne);
echo " :Sum = ".array_sum($ArrOne);
echo "<br>";
var_dump($ArrTwo);
echo " :Sum = ".array_sum($ArrTwo);
echo "<br>";