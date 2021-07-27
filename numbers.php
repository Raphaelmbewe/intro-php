<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php
    
    echo " <h1> Numbers in PHP</h1> <br>";

    echo  40,"<br>";
    echo -40, "<br>";
    echo -40 * 80, "<br>";
    echo -40 + 41, "<br>";
    echo -40 - -50, "<br>";
    echo -40 / 5, "<br>";
    echo -40 % 3, "<br>";
    echo (-40 + 1 )/ 3, "<br>";// order of operations

    $num = 10;
    $num++;
    echo $num, "<br>";

    $sum = 12;
    $sum += 12;
    echo $sum, "<br>";

    echo pow(2,10), "<br>";//power e.g 2^10

    echo sqrt(81), "<br>";// square root

    echo max(1, 10), "<br>";//checking for the bigger value
    echo min(0,2), "<br>"//checking for the lower value
    ?>
</body>
</html>