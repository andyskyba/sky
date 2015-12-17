<?php

/*
*Task03
*Created by Andrii Skyba
*
*
*/

$var = 40320; 
$n = 0;
$temp = 1;


	while ($temp < $var) {
		$temp = $temp * (++$n);
	}

echo $n;
