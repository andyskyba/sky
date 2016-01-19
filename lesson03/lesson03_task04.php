<?php
  // Start timer
  $start = microtime(TRUE);
  // Find out factorial
  $factorial = function( $n ) use ( &$factorial ) {
    $base = $x = 1;
    while(TRUE){
    	if(($x *= (++$base)) >= $n )
    		return ($x > $n)? ($base-1) : $base;
    	}
};

print $factorial( 119 );
//
// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);
