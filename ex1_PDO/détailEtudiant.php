<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<?php 

require("ConnexionDB.php");
$bd=ConnexionBD::getInstance();

//created the database ex1 
//created the table student
//inserted the values manually
$id=$_GET['id'] ?? null;
if(!$id){
    header('location:exercice.php');
}

$req1="select * from student where id=$id";
$response1=$bd->query($req1);
$elements1=$response1->fetch(PDO::FETCH_OBJ);?>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Birthday</th>
      
    </tr>
  </thead>
  <tbody>
      
    <tr>
      <th scope="row"><?php echo $elements1->id?></th>
      <td><?php echo $elements1->Name?></td>
      <td><?php echo $elements1->Birthday?></td>
    </tr>
   
   
  </tbody>
</table>
    
</body>
</html>

