<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<?php
echo ' hello user!'.'<br>';
session_start();
 if (isset($_POST['reset'])) {
     session_unset();   
 }

 if (!isset($_SESSION['nb_visite'])){
    $_SESSION['nb_visite']=1;
echo 'Binevenue c votre premiére visite';}
    else{
    $_SESSION['nb_visite']=  $_SESSION['nb_visite']+1;
echo 'merci pour voutre fidélité c votre '.$_SESSION['nb_visite'].'éme <br>';}?>
<body>
    <form  method="post">
         <input type="submit" name="reset" value="rénitialiser">
    </form>
</body>
</html>