<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .form-floating{
        margin:20px 20px 20px 20px;
        margin-top:20px;
    }
      
        </style>
</head>

<?php
class Etudiant {
    private $nom;
    private $notes = array();

    // Constructor to initialize name and notes
    public function __construct($name, $notes) {
        $this->nom = $name;  // Corrected property assignment
        $this->notes = $notes;
    }

    // Display all notes
    public function afficher_notes() {
        foreach ($this->notes as $value) {  // Corrected $notes reference
            echo 'Note: ' . $value . '<br>';
        }
    }

    // Calculate average
    public function calculer_moyenne() {
        $nb_notes = count($this->notes); // Get number of notes
        if ($nb_notes == 0) return 0; // Avoid division by zero

        $somme = array_sum($this->notes); // Sum all notes
        return $somme / $nb_notes;
    }

    // Determine if the student is successful
    public function success() {
        $moy = $this->calculer_moyenne();
        if ($moy < 10) {
            echo $this->nom . ' : Non admis <br>';
        } else {
            echo $this->nom . ' : ADMIS! <br>';
        }
    }
}

// Creating student objects
$aymen = new Etudiant("Aymen", [11, 13, 18, 7, 10, 13, 2, 5, 1]);
$skander = new Etudiant("Skander", [15, 9, 8, 16]);
$moya=$aymen->calculer_moyenne();
$moys=$skander->calculer_moyenne();?>

<body>
    <div class="row">
    <div class="col container" id="aymen">
    <form action="notes_etud.php" method="post" >
    <div class="form-floating mb-3">
       <input type="text" name="nom" value="<?php echo 'Aymen'?>" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note1" value="<?php echo '11'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" name="note2" value="<?php echo '13'?>" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 3"  value="<?php echo '18'?>"class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" name="note 4"  value="<?php echo '7'?>" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 5"  value="<?php echo '10'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" name ="note 6"  value="<?php echo '13'?>"class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 7"  value="<?php echo '2'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 8"  value="<?php echo '5'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 9"   value="<?php echo '1'?>"class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="moy" value="<?php echo "votre moyenne est".$moya ?>" class="form-control" id="floatingPassword" >
  
    </div>
    </div>
</form>    
    
    
    
    
    
    
    
<div class="col container" id= "skander">
    <div class="form-floating mb-3">
       <input type="text"  value="<?php echo 'Skander'?>" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text"   value="<?php echo '15'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text"  value="<?php echo '9'?>" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text"  value="<?php echo '8'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text"  value="<?php echo '16'?>" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control"value="<?php echo'Votre moyenne est'.$moys ?>" id="floatingPassword" >
  
    </div>
</div>


<script></script>
</body>
</html>