<?php
/*
TASK CONDITIONS:
input => 3091040
output => 94310
*/

//General settings
$start = microtime(TRUE);
$min = 1000000;
$max = 9999999;
$numIn = mt_rand($min, $max);
echo "Origin value: ".$numIn."<br>";

//Convert $numIn to array
$Arr  = array_map('intval', str_split($numIn));
//Sort array
rsort($Arr, SORT_NUMERIC);

//Convert array to int via string
$tempStr = implode("",$Arr);
$numOut = intval($tempStr);
$numOut = (int)($numOut / 100);

//Display results
echo "<br>Result: ".$numOut;

// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);
