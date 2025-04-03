<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            border: 2px solid black; 
            border-collapse: collapse; 
            margin:20px 20px 20px 20px;
            border-radius:2px;
        }
      .title{
        background-color:rgb(152, 214, 233);
        margin:20px 20px 20px 20px;
      }
      tr{
        background-color:rgb(234, 228, 228);
      }
      
    </style>
</head>
<body>
    <div class="row">
<div class="col container">
<div class="form-floating mb-3">
  <input type="text" class="form-control title" id="floatingInput" value="<?php echo'les combattants'?>" >
</div>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      
    </tr>
  </tbody>
</table>
</div>
<div class="col container"></div>
</div>
</body>
</html>



























































<?php
    class AttackPokemon{
        private int $attackMinimal;
        private int $attackMaximal;
        private int $specialAttack;
        private int $probabilitySpecialAttack;
        public function __construct(int $am=10,int $aM=50,int $sa=2,int $psa = 50){
            $this->attackMinimal=$am;
            $this->attackMaximal=$aM;
            $this->specialAttack=$sa;
            $this->probabilitySpecialAttack=$psa;
        }
        //affichage
        public  function affich_attack_stats(){
            foreach($this as $cle => $valeur) {
                print "$cle => $valeur\n";
                }
        }
    //getters
    //getter for the attackMinimal
        public function get_attackMinimal(){
            return $this->attackMinimal;
        }
    //getter for the attackMaximal
        public function get_attackMaximal(){
            return $this->attackMaximal;
        }
    //getter for the specialAttack
        public function get_specialAttack(){
            return $this->specialAttack;
        }
        public function get_probabilitySpecialAttack(){
            return $this->probabilitySpecialAttack;
        }
    //setters
    //setter for the attackMinimal
        public function set_attackMinimal(int $am){
            $this->attackMinimal=$am;
        }
    //setter for the attackMaximal
        public function set_attackMaximal($duration){
            $this->attackMaximal=$duration;
        }
    //setter for the specialAttack
        public function set_specialAttack($sa){
            $this->specialAttack=$sa;
        }
    //setter for the probabiltySpecialAttack
    public function set_probabiltySpecialAttack($sa){
        $this->probabiltySpecialAttack=$sa;
    }
} 
?>