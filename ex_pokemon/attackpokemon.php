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
        background-color:rgb(186, 227, 239);
        margin:20px 20px 20px 20px;
      }
      
  

      .dragon{
        height:50px;
        width:50px;
        margin-left:20px;
      }
           
      .result{
        background-color:grey;
      }
      .round{
            width: 700px;
            height: 100px;
            margin: 20px 20px 20px 20px ;
            background-color:rgb(238, 193, 199);
            border: 1px solid black;
            border-radius:5px;
            padding-left:5px;
            
        
        
       
    }
     .round table tr,.round table td{
        background-color:rgb(172, 172, 161);
     }
    .round table {
        width: 670px;
        margin:20px 20px 20px 20px ;
        border-radius:5px;
        border: 1px solid black;
        
       
    }
    
          
      </style>
</head>

<?php
    class AttackPokemon {
        private int $attackMinimal;
        private int $attackMaximal;
        private int $specialAttack;
        private int $probabilitySpecialAttack;

        public function __construct(int $am = 10, int $aM = 50, int $sa = 2, int $psa = 50) {
            $this->attackMinimal = $am;
            $this->attackMaximal = $aM;
            $this->specialAttack = $sa;
            $this->probabilitySpecialAttack = $psa;
        }

        // Display attack stats
        public function affich_attack_stats() {
            foreach ($this as $cle => $valeur) {
                print "$cle => $valeur\n";
            }
        }

        // Getters
        public function get_attackMinimal(): int {
            return $this->attackMinimal;
        }

        public function get_attackMaximal(): int {
            return $this->attackMaximal;
        }

        public function get_specialAttack(): int {
            return $this->specialAttack;
        }

        public function get_probabilitySpecialAttack(): int {
            return $this->probabilitySpecialAttack;
        }

        // Setters
        public function set_attackMinimal(int $am) {
            $this->attackMinimal = $am;
        }

        public function set_attackMaximal(int $aM) {
            $this->attackMaximal = $aM;
        }

        public function set_specialAttack(int $sa) {
            $this->specialAttack = $sa;
        }

        public function set_probabilitySpecialAttack(int $sa) {
            $this->probabilitySpecialAttack = $sa;
        }
        public function isSpecialAttack(){
            return rand(1, 100) <= $this->probabilitySpecialAttack;        }
    }

class Pokemon {
    private $name;
    private $url;
    private $hp;
    private $attackPokemon;

    public function __construct($name, $url, $hp, AttackPokemon $attackPokemon) {
        $this->name = $name;
        $this->url = $url;
        $this->hp = $hp;
        $this->attackPokemon = $attackPokemon;
    }

    public function getName() {
        return $this->name;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getHp() {
        return $this->hp;
    }

    public function isDead() {
        return $this->hp <= 0;
    }

    public function attack(Pokemon $p) {
        $attackPoints = rand($this->attackPokemon->get_attackMinimal(), $this->attackPokemon->get_attackMaximal());
        
        if ($this->attackPokemon->isSpecialAttack()) {
            $attackPoints *= $this->attackPokemon->get_specialAttack();
        }
        $p->reduceHp($attackPoints);
        return $attackPoints;
    }

    private function reduceHp($damage) {
        $this->hp -= $damage;
    }

    public function whoAmI() {
        echo "<h3>{$this->name}</h3>";
        echo "<img src='{$this->url}' alt='{$this->name}' width='100'><br>";
        echo "Points de vie : {$this->hp}<br>";
    }
}

$att1=new AttackPokemon(10,100,2,20);
$p1=new Pokemon("Dracaufeu Gigamax","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1);
$att2=new AttackPokemon(30,80,4,20);
$p2=new Pokemon("Dracaufeu Gigamax","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE%26usqp%3DCAU&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att2);

?>

<body>
    <div class="row">
<div class="col container">
<div class="form-floating mb-3">
  <input type="text" class="form-control title" id="floatingInput" value="<?php echo'les combattants'?>" >
</div>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Dracaufeu Gigamax :
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s" class="dragon">
      </th>
      <th scope="col">Dracaufeu Gigamax:
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU" class="dragon">
      </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" >points: 200</td>
      <td>points: 200 </td>
      
      
    </tr>
    <tr>
      <td scope="row">Min attack point: 10</td>
      <td>Min Attack point: 30</td>
      
      
    </tr>
    <tr>
      <td scope="row">Max Attack points: 100</td>
      <td colspan="2">Max Attack points: 80</td>
      
    </tr>
   
    <tr>
      <td scope="row">Special attack: 2</td>
      <td colspan="2">Special attack: 4</td>
      
    </tr>
     <tr>
      <td scope="row">Probability special attack: 20</td>
      <td colspan="2">Probability special attack: 20</td>
      
    </tr>
  </tbody>
</table>
<?php
while(!($p1->isDead()) && !($p2->isDead())){
    $degat1=$p1->attack($p2);
    $degat2=$p2->attack($p1);

    echo "</table>
<div class='round'>
<p>Round </p>
<table class='table table-borderless'>
        <tbody>
            <tr>
                <td>$degat1</td>
                <td>$degat2</td>
            </tr>
        </tbody>
    </table>
</div>
<table class='table'>
  <thead>
    <tr>
      <th scope='col'>Dracaufeu Gigamax :
        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s' class='dragon'>
      </th>
      <th scope='col'>Dracaufeu Gigamax:
        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU' class='dragon'>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope='row'>points: ". $p1->getHp() ." </td>
      <td>points: ". $p2->getHp() ." </td>
    </tr>
    <tr>
      <td scope='row'>Min attack point: 10</td>
      <td>Min Attack point: 30</td>
    </tr>
    <tr>
      <td scope='row'>Max Attack points: 100</td>
      <td colspan='2'>Max Attack points: 80</td>
    </tr>
    <tr>
      <td scope='row'>Special attack: 2</td>
      <td colspan='2'>Special attack: 4</td>
    </tr>
    <tr>
      <td scope='row'>Probability special attack: 20</td>
      <td colspan='2'>Probability special attack: 20</td>
    </tr>
  </tbody>
";
}
?>
<!-- 
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Dracaufeu Gigamax :
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s" class="dragon">
      </th>
      <th scope="col">Dracaufeu Gigamax:
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU" class="dragon">
      </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" >points: 200</td>
      <td>points: 200 </td>
      
      
    </tr>
    <tr>
      <td scope="row">Min attack point: 10</td>
      <td>Min Attack point: 30</td>
      
      
    </tr>
    <tr>
      <td scope="row">Max Attack points: 100</td>
      <td colspan="2">Max Attack points: 80</td>
      
    </tr>
   
    <tr>
      <td scope="row">Special attack: 2</td>
      <td colspan="2">Special attack: 4</td>
      
    </tr>
     <tr>
      <td scope="row">Probability special attack: 20</td>
      <td colspan="2">Probability special attack: 20</td>
      
    </tr>
  </tbody>
</table>
<div class="round">
<p>Round </p>
<table class="table table-borderless">
        <tbody>
            <tr>
                <td>200</td>
                <td>150</td>
            </tr>
        </tbody>
    </table>
    </div> 
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">Dracaufeu Gigamax :
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s" class="dragon">
      </th>
      <th scope="col">Dracaufeu Gigamax:
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU" class="dragon">
      </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" >points: 200</td>
      <td>points: 200 </td>
      
      
    </tr>
    <tr>
      <td scope="row">Min attack point: 10</td>
      <td>Min Attack point: 30</td>
      
      
    </tr>
    <tr>
      <td scope="row">Max Attack points: 100</td>
      <td colspan="2">Max Attack points: 80</td>
      
    </tr>
   
    <tr>
      <td scope="row">Special attack: 2</td>
      <td colspan="2">Special attack: 4</td>
      
    </tr>
     <tr>
      <td scope="row">Probability special attack: 20</td>
      <td colspan="2">Probability special attack: 20</td>
      
    </tr>
  </tbody>
</table>
<div class="round">
<p>Round </p>
<table class="table table-borderless">
        <tbody>
            <tr>
                <td>200</td>
                <td>150</td>
            </tr>
        </tbody>
    </table>
    </div>





</div>

<div class="col container">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Dracaufeu Gigamax :
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s" class="dragon">
      </th>
      <th scope="col">Dracaufeu Gigamax:
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU" class="dragon">
      </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" >points: 200</td>
      <td>points: 200 </td>
      
      
    </tr>
    <tr>
      <td scope="row">Min attack point: 10</td>
      <td>Min Attack point: 30</td>
      
      
    </tr>
    <tr>
      <td scope="row">Max Attack points: 100</td>
      <td colspan="2">Max Attack points: 80</td>
      
    </tr>
   
    <tr>
      <td scope="row">Special attack: 2</td>
      <td colspan="2">Special attack: 4</td>
      
    </tr>
     <tr>
      <td scope="row">Probability special attack: 20</td>
      <td colspan="2">Probability special attack: 20</td>
      
    </tr>
  </tbody>
</table>
<div class="round">
<p>Round </p>
<table class="table table-borderless">
        <tbody>
            <tr>
                <td>200</td>
                <td>150</td>
            </tr>
        </tbody>
    </table>
    </div>
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">Dracaufeu Gigamax :
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s" class="dragon">
      </th>
      <th scope="col">Dracaufeu Gigamax:
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU" class="dragon">
      </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" >points: 200</td>
      <td>points: 200 </td>
      
      
    </tr>
    <tr>
      <td scope="row">Min attack point: 10</td>
      <td>Min Attack point: 30</td>
      
      
    </tr>
    <tr>
      <td scope="row">Max Attack points: 100</td>
      <td colspan="2">Max Attack points: 80</td>
      
    </tr>
   
    <tr>
      <td scope="row">Special attack: 2</td>
      <td colspan="2">Special attack: 4</td>
      
    </tr>
     <tr>
      <td scope="row">Probability special attack: 20</td>
      <td colspan="2">Probability special attack: 20</td>
      
    </tr>
  </tbody>
</table>
<div class="round">

<p>Round </p>
<table class="table table-borderless">
        <tbody>
            <tr>
                <td>200</td>
                <td>150</td>
            </tr>
        </tbody>
    </table>
    </div> -->
<table class="table table-borderless">
        <tbody>
            <tr>
                <td>Le vainqueur est</td>
                <td>150</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
</div>
</body>
</html>