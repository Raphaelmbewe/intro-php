<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <form action="switch.php" method="post">
       <input type="text" name="grade">
       <input type="submit">
    </form>

    <?php
    
    $grade = $_POST["grade"] ?? '';

    echo $grade, "<br>";

    switch($grade){
        case "A+":
            echo "Upper distinction";
            break;

        case "A":
            echo "Lowwer distinction";
            break;
        
        case "B+":
            echo "Upper merit";
            break;    

        case "B":
            echo "Lowwer merit";
            break;   
            
        case "C+":
            echo "Credit";
            break; 
            
        case "C":
            echo "Pass";
            break;    

        case "F":
            echo "Fail: You will reseat for this paper";
            break;  
            default:
            echo "IS AN INVALID GRADE!!!";
    }

    ?>
</body>
</html>