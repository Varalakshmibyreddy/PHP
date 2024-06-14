<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="box.php" method="post">
   Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>

   Oranges: <input type="checkbox" name="fruits[]" value="Oranges"> <br>

   Banana: <input type="checkbox" name="fruits[]" value="banana"> <br>


    <input type="submit">

    </form>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    ?>
</body>
</html>