<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoopS</title>
</head>
<body>
    <?php
// WHILE LOOP
//     $index = 1;
//     while($index <= 5){
//  echo "$index <br>";
//  $index++;

//     }

//DO WHILE LOOP
// $index = 1;
//     do{
//  echo "$index <br>";
//  $index++;

//     }while($index <= 5);

    //FOR LOOP

    $luckyNumbers = array(1,6,8,2,9,5);
    for($i = 0; $i <= count($luckyNumbers); $i++){
      echo $luckyNumbers[$i] ?? null, "<br>";
    };
    ?>
</body>
</html>