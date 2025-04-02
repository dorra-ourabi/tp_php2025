<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
}}
?>
<body>
    <div id = "aymen"></div>
    <div id = "skander"></div>

</body>
</html>