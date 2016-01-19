<?php
  // Start timer
  $start = microtime(TRUE);
  // Find out factorial
  $factorial = function( $n ) use ( &$factorial ) {
    $base = $x = 1;
    while(TRUE){
    	if(($x *= (++$base)) >= $n ) {
    		if ($x > $n){      //Additional checkpoint
    			return ($base-1);
    		} else return $base;
    	}
	}
};

print $factorial( 121 );
//
// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);
