<?php

// You have an array:
  $hello_world = array("W", "o", " ", "l", "H", "!", "l", "o", "e", "r", "d", "l");

// You should print phrase "Hello World!" without quotes
echo "ECHO: ";
echo ("$hello_world[4]$hello_world[8]$hello_world[3]$hello_world[6]$hello_world[7]
        $hello_world[0]$hello_world[1]$hello_world[9]$hello_world[11]$hello_world[10]$hello_world[5]");
echo "<br>";

print "PRINT: ";
print "$hello_world[4]$hello_world[8]$hello_world[3]$hello_world[6]$hello_world[7]
        $hello_world[0]$hello_world[1]$hello_world[9]$hello_world[11]$hello_world[10]$hello_world[5]";

