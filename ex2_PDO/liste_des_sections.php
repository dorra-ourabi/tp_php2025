


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
    .icon{
      height:30px;
      width:30px;
    }
  </style>
</head>

<?php require("ConnexionBD.php");
$bd=ConnexionBD::getInstance();
$req="select * from section";
$response=$bd->query($req);
$elements=$response->fetchALL(PDO::FETCH_OBJ); ?>

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
    <p>liste des sections</p>
</div>
  <!-- Table -->
  <div class="container mt-4">
    <table id="myTable" class="display nowrap" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>désignation</th>
          <th>descrition </th>
          <th>actions</th>
          
        </tr>
      </thead>
      <tbody>
      <?php foreach($elements as $elem):?>
        <tr>
          <td><?php echo $elem->id?></td>
          <td><?php echo $elem->désignation?></td>
          <td><?php echo $elem->descrition?></td>
          <td><a href="http://localhost:8000/sectioninfo.php?des=<?php echo $elem->désignation?>"><img src="https://icons.iconarchive.com/icons/ionic/ionicons/256/list-outline-icon.png" class="icon"></img></a></td>
          
          
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