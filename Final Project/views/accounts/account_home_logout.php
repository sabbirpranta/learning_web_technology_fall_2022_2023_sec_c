<?php
require_once('../../config/db.php');

$query = "select * from accounts_model";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <h1 style="display:inline;padding-left:500px;padding-right:300px;">ACCOUNT</h1>
                <a href="accounts_home.php" style= "border:2px white solid;border-radius:3px;margin:3px;padding:auto;background-color:white;text-decoration:none">Home</a>
                <a href="../login/accounts_login.php" style= "border:2px white solid;border-radius:3px;margin:3px;padding:auto;background-color:white;text-decoration:none">Logout</a>
                
               
    
</body>
</html>
