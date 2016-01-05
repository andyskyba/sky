<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.16
 * Time: 11:55
 */


$capacityArr = 10;
$Array = [];

//call function to make array and display it

  makeArr($Array, $capacityArr);
  var_dump($Array);



//function receive array via link and fulfill it with data according to capacity

function makeArr(&$array, $capacity){

    for ($i = 0; $i < $capacity; $i++) {
        $array[$i] = pow($i, 2);
    }
}