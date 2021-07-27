<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
 <form action="asso_array.php" method ="post">
   Name: <input type="text" name="student"><br>
     <button type="submite">Submit</button>
 </form>

    <?php
    $grades = array("Jim"=>"A+", "Pam"=>"B+", "Oscar"=>"C+");
    echo $grades[$_POST["student"] ?? " "] ?? "No results yet";
    
    ?>
</body>
</html>