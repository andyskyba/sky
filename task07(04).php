<?php
/**
 * Created by PhpStorm.
 * User: Andrii Skyba
 * Date: 17.12.15
 * Time: 8:59
 */


$word = 'Google';
$lengthlt = 3;

    if(strlen($word) > $lengthlt){
        $tempArr = str_split($word);                     // transform string to array
        $tempArr[0] = "&ltred&gt$tempArr[0]&ltred&gt";   // '<' - &lt, '>' - &gt
        $word = implode($tempArr);                       // unite array to string
        echo ($word);

    } else echo "Your entered data is invalid <br> Here should be more than $lengthlt symblos";