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
class Etudiant{
    private $nom;
    private $notes=array();
    private function afficher_note(){
        foreach($this->$notes as $value){
            echo 'note:'.$value ;
        }
    
    }
    private function calculer_moyenne(){
        $nb_notes=func_num_args();
        $somme=0;
        foreach($this->$notes as $value){
          $somme+=$value;
    }
    return ($somme/$nb_notes); 

}
function success(){
    $moy=$this->calculer_moyenne();
    if($moy<10){
        echo'non admis';
    }
    else{
        echo'ADMIS!';
    }
}};
?>
<body>
    <div class="row">
    <div class="col container" id="aymen">
    <form action="notes_etud.php" method="post" >
    <div class="form-floating mb-3">
       <input type="text" name="nom" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note1" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" name="note2" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 3" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" name="note 4" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 5" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" name ="note 6"class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 7" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 8" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="note 9" class="form-control" id="floatingPassword" >
  
    </div>
    </div>
</form>
<?php echo 'bonjour'.$POST['name']?>
    
    
    
    
    
    
    
    
    
    
    
    
<div class="col container" id= "skander">
    <div class="form-floating mb-3">
       <input type="text" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
       <input type="text" class="form-control" id="floatingInput">
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingPassword" >
  
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingPassword" >
  
    </div>
</div>
<script></script>
</body>
</html>