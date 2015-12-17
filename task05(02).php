<?php
/**
 * Created by PhpStorm.
 * User: Andrii Skyba
 * Date: 17.12.15
 * Time: 8:29
 */
//$title = 'Page title';
//$description = 'The Meta Description Tag';
//$keywords = 'The Meta Keywords Tag';
//html:
//<html>
//<head>
//<title>$title</title>
//<meta name="description" content="$description">
//<meta name="keywords" content="$keywords">
//</head>
//<body>Simple html page</body>
//</html>

$title = 'Page title';
$description = 'The Meta Description Tag';
$keywords = 'The Meta Keywords Tag';

$html_var =
'<html>
    <head>
    <title>'.$title.'</title>
    <meta name="description" content="'.$description.'">
    <meta name="keywords" content="'.$keywords.'">
    </head>
    <body>Simple html page</body>
</html>';

echo $html_var;