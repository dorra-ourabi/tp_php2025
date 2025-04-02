<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
</body>
</html>