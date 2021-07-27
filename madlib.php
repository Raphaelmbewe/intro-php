<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlibs</title>
</head>
<body>
<form action="madlib.php" method_exists="get">
   Color: <input type="text" name="color"> <br>
   Plural Noun: <input type="text" name="noun"> <br>
   Name: <input type="text" name="name"> <br>
    <button type="submit">submit</button>
    </form>
    <?php

    $Color = $_GET['color'];
    $Noun = $_GET['noun'];
    $Name = $_GET['name'];
 echo " Rose are $Color", "<br>";
 echo " $Noun are blue", "<br>";
 echo " I love $Name", "<br>";
    ?>
</body>
</html>