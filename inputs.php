<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User inputs</title>
  <!-- https://docs.google.com/spreadsheets/d/1FozYEdx5Pjy2vFJLmr0qlPQ3O369qE9Y_y0XzUHIB3Y/edit?usp=sharing -->
</head>
<body>
  
    <form action="inputs.php" method="get">
   Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    <input type="submit">
    </form>
    <br>
    <?php 
    echo $_GET["name"],"<br>";
    echo $_GET["age"],"<br>";
    ?>
</body>
</html>