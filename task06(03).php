<?php
/**
 * Created by PhpStorm.
 * User: Andrii Skyba
 * Date: 17.12.15
 * Time: 8:42
 */


// http://php.net/manual-lookup.php?pattern=test&scope=quickref#quickref_functions

$url = 'http://php.net/manual-lookup.php?pattern=test&scope=quickref#quickref_functions';

//DISPLAYING RESULT
print_r(parse_url($url));


