<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    
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
</head>
<?php 
require("ConnexionBD.php");
$bd = ConnexionBD::getInstance();

$id = $_GET['id'] ?? null;
if (!$id) {
    header('location:liste_des_etudiants.php');
    exit;
}

// Update query using prepared statement (changing the name to Dorra)
$req1 = $bd->prepare("delete from etudiant  WHERE id = ?");
$req1->execute(array($id));

// Select query to get the updated data
$req2 = "SELECT * FROM etudiant" ;

$res2=$bd->query($req2);
$elem2 = $res2->fetchALL(PDO::FETCH_OBJ);
?>
<body>

<div class="container mt-4">
    <table id="myTable" class="display nowrap" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Name</th>
          <th>Birthday</th>
          <th>Section</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php foreach ($elem2 as $elem):?>
          <td><?= $elem->id ?></td>
          <td><img src="<?= $elem->image ?>" class="pic"></td>
          <td><?= $elem->name ?></td>
          <td><?= $elem->birthday ?></td>
          <td><?= $elem->section ?></td>
        </tr>
        <?php endforeach?>
      </tbody>
    </table>
</div>

<h1>deleted Successfully</h1>

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
