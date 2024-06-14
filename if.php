<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$isMale = false;
$isTall = true;
if ($isMale && $isTall){
    echo "you are a tall male";
} elseif( $isMale && !$isTall){
    echo "you are a short male";
} elseif(!$isMale && $isTall){
    echo "you are not male but are tall";
} else {
    echo "you are not male and not tall"; 
}

?>

</body>
</html>