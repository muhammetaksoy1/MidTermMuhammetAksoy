<?php include("Automobile.php");?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="get-method.php" method="get"> 
<input type="text" name="LicencePlate" placeholder="LicencePlate" /> 
<input type="text" name="Brand" placeholder="Brand" /> 
<input type="text" name="Model" placeholder="Model" /> 
<input type="text" name="ModelYear" placeholder="ModelYear" /> 
<input type="text" name="Color" placeholder="Color" /> 

<input type="submit" name="submit" /> 
//I shoul use $_GET method 
</form> 
</body>
</html>