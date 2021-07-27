<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    $phrase = "This intro to php course from freecodecamp!!";
    $name = "Raphael";
    echo "String in php <br>";
    echo strtoupper($phrase),"<br>";
    echo strtolower($phrase), "<br>";
    echo strlen($phrase), "<br>";
    echo $phrase[0], "<br>";
    echo $name[0], "<br>";
    echo $name[0] = "B", "<br>";
    echo $name, "<br>";
    echo str_replace("Baphael","Alpha", $name), "<br>";
    echo substr($name, 0,3)


    
    ?>
</body>
</html>