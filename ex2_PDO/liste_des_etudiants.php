
<?php
require("Utilisateur.php");

session_start();
session_destroy(); //  clears session completely
session_start();   // start a new one
/*in my database I inserted 2 lignes the one with
id=7 is an admin 
and the other with 
id=8 is a user*/
if (!isset($_SESSION['utilisateur'])) {
    $_SESSION['utilisateur'] = Utilisateur::getById(7); // if you want to be a user change 7 to 8
}
$utilisateur = $_SESSION['utilisateur'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" />

  <!-- jQuery & DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <!-- DataTables Buttons -->
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

  <style>
    .container-fluid,
    .custom-navbar {
      background-color: rgb(130, 188, 245) !important;
    }
    .liste_etud{
        width:700px;
        height:50px;
        margin:20px 20px 20px 20px;
        border-radius:5px;
        background-color:rgb(202, 195, 196);
        padding:20px;
    }
    .pic{
        height:50px;
        width:50px;
        radius:100%;
    }
    
    .contain{
      width:700px;
      margin: 40px 40px 40px 40px;
    }
    .search{
      background-color:red;
      color:white;
    }
    .icon{
      height:30px;
      width:30px;
    }
    .added{
      margin-left:20px;
      margin-top:15px;
    }
  </style>
</head>

<?php

$bd=ConnexionBD::getInstance();
$req="select * from etudiant";
$response=$bd->query($req);
$elements=$response->fetchALL(PDO::FETCH_OBJ);?> 

<body>


 















  <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Students Managment System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost:8000/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/liste_des_etudiants.php">Liste des étudiants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/liste_des_sections.php">liste des sections</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

<?php  echo  "you're connected as a ".$utilisateur->getRole();?>


























  <div class="liste_etud">
    <p>liste des etudiants</p>
</div>
<!-- Adding a filter-->
<form action="search.php" method="post" >
<div class="input-group mb-3 contain">
  <input name="student_name" type="text" class="form-control filter" placeholder="write the name of the student" aria-label="Recipient's username" aria-describedby="button-addon2">
  <input class="btn btn-outline-secondary search" type="submit" id="button-addon2" value="Search">
  <?php if ($utilisateur->isAdmin()): ?>
    <a href="http://localhost:8000/add.php"><img src="https://icons.iconarchive.com/icons/ionic/ionicons/256/person-add-outline-icon.png" class="icon added"></img></a>
    <?php endif;?>
</div>
  
  <!-- Table -->
  <div class="container mt-4">
    <table id="myTable" class="display nowrap" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>image</th>
          <th>name</th>
          <th>birthday</th>
          <th>Section</th>
          <th>Actions</th>
          
        </tr>
      </thead>
      <tbody>
        <?php foreach($elements as $elem):?>
        <tr>
          <td><?php echo $elem->id?></td>
        
          <td><img src="<?php echo $elem->image?>" class="pic"></td>
          <td><?php echo $elem->name?></td>
          <td><?php echo $elem->birthday?></td>
          <td><?php echo $elem->section?></td>
          <td><a href="http://localhost:8000/info.php?id=<?= $elem->id?>"><img src="https://icons.iconarchive.com/icons/amitjakhu/drip/256/information-icon.png" class="icon"></img></a>
          <?php if ($utilisateur->isAdmin()): ?>
            
            <a href="http://localhost:8000/delete.php?id=<?php echo $elem->id?>"><img src="https://icons.iconarchive.com/icons/aniket-suvarna/box-regular/256/bx-eraser-icon.png" class="icon"></img></a>
            <a href="http://localhost:8000/update.php?id=<?php echo $elem->id?>"><img src="https://icons.iconarchive.com/icons/arturo-wibawa/akar/256/edit-icon.png" class="icon"></img></a>
            <?php endif;?></td> 

          
        </tr>
        <?php endforeach;?>
        <!-- more rows -->
      </tbody>
    </table>
  </div>

  <!-- Initialize DataTable with Buttons -->
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: ['csv', 'excel', 'pdf', 'print']
      });
    });
  </script>
 
</body>
</html>