<?php
/**
 * Created by PhpStorm.
 * User: Andrii Skyba
 * Date: 17.12.15
 * Time: 10:28
 */

//FOR
$result = 1;
$var_mp = 9;

echo 'Result (for cycle "FOR") <br>';
    for ($i = 1; $i <= $var_mp; $i++){
        $result = $i * $var_mp;
        echo "$i * $var_mp =  $result<br>";
    }

echo '<br>Result (for cycle "WHILE") <br>';
    $iterator = 1;
    while($iterator <= $var_mp){
        $result = $iterator * $var_mp;
        echo "$iterator * $var_mp =  $result<br>";
        $iterator++;
    }

echo '<br>Result (for cycle "DO WHILE") <br>';
    $iterator = 1;
    do{
        $result = $iterator * $var_mp;
        echo "$iterator * $var_mp =  $result<br>";
        $iterator++;
    }while ($iterator <= $var_mp);

echo '<br>Result (for cycle "FOREACH") <br>';
    $arr = array (1,2,3,4,5,6,7,8,9);
    foreach($arr as &$value){
        $result = $value * $var_mp;
        echo "$value * $var_mp =  $result<br>";
    }
