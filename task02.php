<?php
/*
*Task02
*Created by Andrii Skyba
*
*/

define('PI', '3.1415');
$a = 24.65;
$b = 10.97;
$result = 0;

//CALCULATING

$result = sqrt(pow((255 + $a), 4) / pow((13 * PI + 12 / $b), 3));

//DISPLAYING RESULTS

echo round($result, 5);

