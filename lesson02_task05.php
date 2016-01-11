<?php 
$start = microtime(TRUE);
$array = array(
    "bla" => array(
        "klo" => "value1",
        "tre" => "value2",
        "din" => array(
        	"sta" => "value3",
        	"bue" => "value4",
        	"vas" => "value5"),
    "dfe" => "value6",
    "qwe" => "value7")
);

//array with necessary keys - 
//here U may add any values
$arrayK = array(0 => "sta",
				1 => "bue",
				2 => "vas");

//call simple main function
forarr_search($array, $arrayK);


function forarr_search($arr, $arrKey){
	foreach ($arr as $key => $value){
		if (!(is_array($value))){
			
			foreach ($arrKey as $keyArr){
				if ($key == $keyArr)
				{
					echo "$key => $arr[$key] <br>";
				}
			}
		} else if (is_array($value)){
			
			forarr_search($value, $arrKey);			
		}
	}
}

// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);