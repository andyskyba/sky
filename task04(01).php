<?php

$search = 'computer';

//'Assume you wanted to find every file in the current directory and all 
//subdirectories that contained the word computer, regardless of the letter 
//case. To list every file containing the word computer, type the following:
//findstr /s /i /m "\<$search\>" *.*'

echo "'Assume you wanted to find every file in the current directory and all subdirectories that contained the word computer,  
regardless of the letter case. To list every file containing the word computer, type the following: 
findstr /s /i /m \"\&lt $search \\&gt\"*.*'";

echo("<br><br>");

echo ("'Execute commands on files found by the find command: find -iname \"MyCProgram.c\" -exec md5sum {} \;");

echo("<br><br>");

$file = 'thegeekstuff.txt';

echo ("'Add line number for all non-empty-lines in a file: $ sed '/./=' $file | sed 'N; s/\\n/ /''");





