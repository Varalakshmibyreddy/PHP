<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="madgame.php" method="GET">
    Color:<input type="text" name="color"><br>
    Plural Noun:<input type="text" name="pluralNoun"><br>
    Celebrity: <input type="text" name="celebrity"><br>

    <input type="submit">

</form>
<br><br>
<?php
    $Color=$_GET["color"];
    $PluralNoun=$_GET["pluralNoun"];
    $Celebrity=$_GET["celebrity"];
    echo "Roses are $Color <br>";
    echo "$PluralNoun are blue <br>";
    echo "I love $Celebrity <br>";
?>

</body>
</html>