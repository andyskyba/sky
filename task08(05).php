<body>
<form method='POST'>
<input type="email" name="data" method="post">
<input type="submit" value="SUBMIT">
</form>
<?php
$varmail = ''; //variable for displaying current email

if($_POST){
    if(filter_var($_POST['data'], FILTER_VALIDATE_EMAIL)){  //checking of e-mail with FILTER_VALIDATE_EMAIL
        $varmail = implode($varmail,$_POST);
        echo "E-mail: $varmail <br>";
        echo 'STATUS: VALID <br>';
    }
    else {
        $varmail = implode($varmail,$_POST);
        echo "E-mail: $varmail <br>";
        echo 'STATUS: YOUR EMAIL is INVALID or EMPTY<br>';
    }
}
?>
</body>