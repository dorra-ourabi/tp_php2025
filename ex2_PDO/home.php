<?php
require_once("Utilisateur.php");

// 🔐 Simulation de connexion (id=1 par exemple)
session_start();
if (!isset($_SESSION['utilisateur'])) {
    $_SESSION['utilisateur'] = Utilisateur::getById(7); // admin ou user
}
$utilisateur = $_SESSION['utilisateur'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<style>
    .container-fluid,.custom-navbar { background-color:rgb(130, 188, 245) !important;}
    </style>
</head>
<?php 
require("ConnexionBD.php");?>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Students Managment System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link " href="#" >logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Hello,PHP LOVERS! Welcome to your adminstration platform</h1>

</body>
</html>