<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comperison</title>
</head>
<body>
 <!-- <form action="asso_array.php" method ="post">
   Name: <input type="text" name="student"><br>
     <button type="submite">Submit</button>
 </form> -->

    <?php
    
    function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        }elseif($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        }else {
            return $num3;
        }
      
    }
    echo getMax(91,300,300);

    ?>
</body>
</html>