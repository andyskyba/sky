<?php
$varstr = "Ukraine";
$arr = str_split($varstr);
$colorOne = "yellow";
$colorTwo = "blue";
echo "a)<br><br>";
echo "Input: $varstr <br>";
echo "Output:";

foreach ($arr as $key => $value) {

    if($key%2){
        echo "<font color='$colorOne'>$value</font>";
    } else {
        echo "<font color='$colorTwo'>$value</font>";
    }
}
// next part of task
$varstr = "I am a long and redundant sentence that serves no purpose except to be an test example.";
$arr = explode(" ", $varstr);
echo "<br><br>b)<br><br>";
echo "Input: $varstr <br>";
echo "Output: ";
(bool)$col_selector = TRUE;
for($i = 0; $i < count($arr); $i++){

    if($col_selector){

        echo "<font color='$colorOne'>$arr[$i]</font> ";
        $i++;
        echo "<font color='$colorOne'>$arr[$i]</font> ";
        $col_selector = FALSE;

    } else if (!$col_selector){

        echo "<font color='$colorTwo'>$arr[$i]</font> ";
        $i++;
        echo "<font color='$colorTwo'>$arr[$i]</font> ";
        $col_selector = TRUE;
    }
}