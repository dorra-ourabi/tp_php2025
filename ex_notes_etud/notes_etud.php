<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    
    #moy,#moy1{
      background-color:lightblue;
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
    public function get_name(){
      return $this->nom;
    }
    public function get_table_of_notes(){
      return $this->notes;
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
       <input type="text" id="nom" value="<?php echo $aymen->get_name()?>" class="form-control" id="floatingInput">
  
    </div>
    <?php foreach($aymen->get_table_of_notes() as $note):?>
    <div class="form-floating mb-3">
      <input type="text"  value="<?php echo  $note?>" class="form-control note" id="floatingInput" >
  
    </div>
    <?php endforeach ?>
   
    <div class="form-floating mb-3">
      <input type="text" id="moy" value="<?php echo "votre moyenne est".$moya ?>" class="form-control" id="floatingPassword" >
  
    </div>
    </div>
   
    
    
    
    
    
    
    
    <div class="col container" id="aymen">
    <form action="notes_etud.php" method="post" >
     
    <div class="form-floating mb-3">
       <input type="text" id="nom" value="<?php echo $skander->get_name()?>" class="form-control" id="floatingInput">
  
    </div>
    <?php foreach($skander->get_table_of_notes() as $note):?>
    <div class="form-floating mb-3">
      <input type="text"  value="<?php echo  $note?>" class="form-control note" id="floatingInput" >
  
    </div>
    <?php endforeach ?>
   
    <div class="form-floating mb-3">
      <input type="text" id="moy" value="<?php echo "votre moyenne est".$moys ?>" class="form-control" id="floatingPassword" >
  
    </div>
    </div>
   
    </div>
<script>
//adding coloring depending on the value of the note
  let notes = document.querySelectorAll(".note");

  notes.forEach(note => {
    if (parseFloat(note.value) > 10) {
      note.style.backgroundColor = "lightgreen";
    } else if(parseFloat(note.value) == 10){
      note.style.backgroundColor = "lightyellow";
    }
    else{
      note.style.backgroundColor="red";
    }
  });
</script>



  

</body>
</html>