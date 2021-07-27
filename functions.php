<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
 <!-- <form action="asso_array.php" method ="post">
   Name: <input type="text" name="student"><br>
     <button type="submite">Submit</button>
 </form> -->

    <?php

    function sayHi($name){

        echo "Hello $name <br>";
    }

    sayHi("Raphael");
    sayHi("Jay-Jay");
    sayHi("Raph Raph");

    //Return Statements

    function cube($num){              
     return  $num ** 3;
    }
    echo $num2 = cube(4),"<br>";

    //If Statements

    $isMale = false;
    $isTall = true;
    if($isMale && $isTall){
        echo "You are a tall male";
    }elseif($isMale && $isTall){
        echo "You are a short male";
    }elseif(!$isMale && $isTall){
        echo "You are tall but not male";
    }
    else{
        echo "You are not male and not tall";
    }
    
    ?>
</body>
</html>