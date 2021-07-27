<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>url parameters</title>
</head>
<body>
<!-- GET VS POST -->
<!-- when submitting important information use a post request -->
<form action="url.php" method="post">
   Password: <input type="password" name="password"> <br>
  <button type="submit">submit</button>
    </form>
    <?php 
    echo $_POST["password"] ?? " ";
    
    ?>
</body>
</html>