<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic_calculator</title>
</head>
<body>
    <form action="basic_calculator.php" method_exists="get">
    <input type="number" name="num1">
    <div class="sign">+</div>
    <input type="number" name="num2">
    <br>
    <button type="submit">results</button>
    </form>
    <?php
 $sum = (int)$_GET["num1"] + (int)$_GET["num2"];
 echo $sum;
    ?>
</body>
</html>