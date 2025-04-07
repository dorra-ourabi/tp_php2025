<?php
$id=$_POST['id'];
$name=$_POST['nom'];
$birthday=$_POST['birthday'];
$section=$_POST['section'];
$url=$_POST['url'];
require ("ConnexionBD.php");?>





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
  </style>
</head>

<?php

$bd=ConnexionBD::getInstance();
$req = $bd->prepare("INSERT INTO etudiant (id, name, birthday, section, image) VALUES (?, ?, ?, ?, ?)");
$req->execute([$id, $name, $birthday, $section, $url]);


$req1=$bd->prepare("select * from etudiant where id=?");
$req1->execute(array($id));
$elem=$req1->fetch(PDO::FETCH_OBJ);
?> 

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

 




























  <div class="liste_etud">
    <p>liste des etudiants</p>
</div>
<!-- Adding a filter-->

  
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
          
          
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td><?php echo $elem->id?></td>
        
          <td><img src="<?php echo $elem->image?>" class="pic"></td>
          <td><?php echo $elem->name?></td>
          <td><?php echo $elem->birthday?></td>
          <td><?php echo $elem->section?></td>
          

          
        </tr>
       
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
 <h1>Added succefulyy</h1>
</body>
</html>