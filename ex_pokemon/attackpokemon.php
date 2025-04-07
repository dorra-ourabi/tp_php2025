<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    <!-- styling the page-->
    
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
            width: 1500px;
            height: 100px;
            margin: 20px 20px 20px 20px ;
            background-color:rgb(238, 193, 199);
            border: 1px solid black;
            border-radius:5px;
            padding-left:50px;
            
        
        
       
    }
    .round1{
        width: 1500px;
            height: 150px;
            margin: 20px 20px 20px 20px ;
            background-color:rgb(201, 244, 215);
            border: 1px solid black;
            border-radius:5px;
            padding-left:50px;

    }
     .round table tr,.round table td{
        background-color:rgb(172, 172, 161);
     }
    .round table {
        width: 1400px;
        margin:20px 20px 20px 20px ;
        border-radius:5px;
        border: 1px solid black;
        
       
    }
    
          
      </style>
</head>
<!-- calling classes-->
<?php
 require("classAttackPokemon.php");
 
 require("classPokemonFeu.php");
 require("classPokemonEau.php");
 require("classPokemonPlante.php");
 
    







$types = ["eau", "feu", "plante", "normal"];
$type1= $types[array_rand($types)];
$type2= $types[array_rand($types)];


$att1=new AttackPokemon(10,100,2,20);
$att2=new AttackPokemon(30,80,4,20);
//générer un combat aléatoire
if ($type1=="eau"){
  $p1=new PokemonEau("dracau eau","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1,"eau");
}
elseif($type1=="feu"){
  $p1=new PokemonFeu("dracau feu","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1,"feu");
}
elseif($type1=="plante"){
  $p1=new PokemonPlante("dracau plante","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1,"plante");
}
else{
  $p1=new Pokemon("dracau nrml","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1);
}

if ($type2=="eau"){
  $p2=new PokemonEau("dracau eau","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1,"eau");
}
elseif($type2=="feu"){
  $p2=new PokemonFeu("dracau feu","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1,"feu");
}
elseif($type2=="plante"){
  $p2=new PokemonPlante("dracau plante","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1,"plante");
}
else{
  $p2=new Pokemon("dracau nrml","https://l.messenger.com/l.php?u=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%253AANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg%26s&h=AT18GnfXmsJflHAGzEm3yyyarrkosIQctx7QsyxzzJAuLoJglN40-jaERpyzV3BkN_kHdse5WFb4TVTrCAVtNlUhtsxyE0YwXeERnkPM63yTSpLi3B8EM2SYeWK37g",200, $att1);
}



?>
<!-- the body of the game-->
<body>
    <!-- drawing the first table-->
<div class="row">

<div class="form-floating mb-3">
  <input type="text" class="form-control title" id="floatingInput" value="<?php echo'les combattants'?>" >
</div>
<table class="table" >
  <thead>
    <tr>
      <th scope="col"><?php echo $p1->getName() ?>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s" class="dragon">
      </th>
      <th scope="col"><?php echo $p2->getName() ?>
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

<!-- testing results of the attack-->
<?php
//testing wether the game ended or not
while(!($p1->isDead()) && !($p2->isDead())){
    $degat1=$p1->attack($p2);
    $degat2=$p2->attack($p1);
//drawing more tables based on the obtained results
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
      <th scope='col'>" . $p1->getName() ." :
        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s' class='dragon'>
      </th>
      <th scope='col'>".$p2->getName().":
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
</div>

<!--announcing the winner-->
<table class="table table-borderless">
        <tbody>
            <tr>

                <?php 
               // deciding who's the winner
                if($p1->getHp()<$p2->getHP()){
                    echo "<div class='round1'> 
                    <p> Le vainqueur est </p>
                    <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNJaj8BSGr9Dpucf434GVv4M2YphVDfaDOudcF1ubR4LRPun85dGHrgLweETqhlasXuE&usqp=CAU' class= 'dragon'>
                    </div>";
                }
                else{
                    echo "<div class='round1'> 
<p> Le vainqueur est </p>
<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA5v9MbFBvw7cenr5_twJ62NRKkv7SbSceZg&s'class= 'dragon'>
</div>"
                    ;
                }?>


   


   
</div>
</div>
</body>
</html>