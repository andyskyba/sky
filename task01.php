<?php
/**
 * TASK No 1
 * Created by PhpStorm.
 * User: Andrii Skyba
 * Date: 16.12.15
 * Time: 18:58
 */

// current variables
$bday = 31;
$bmth = 12;
$byear = 2015;
$bresult = 0;
$weekarr = array(
    0 => 'Monday',
    1 => 'Tuesday',
    2 => 'Wednesday',
    3 => 'Thursday',
    4 => 'Friday',
    5 => 'Saturday',
    6 => 'Sunday',
    );

// display conditions
    echo 'Our conditions: <br>';
    echo (" DAY: $bday, MONTH: $bmth, YEAR: $byear <br>");
    //print_r($weekarr);


//CALCULATE exect day of week
//a = (14 – місяць) / 12
//y = рік – a
//m = місяць + 12 * a – 2
//ДеньТижня = (день + y + y / 4 – y / 100 + y / 400 + (31 * m) / 12) MOD 7

    $bresult = (int)($bday + $byear + (int)($byear/4) - (int)($byear/100) + (int)($byear/400) + (31 * $bmth) / 12) %7 ;

//Displaying result

    echo '<br>';
    echo $weekarr[$bresult];




