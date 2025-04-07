<?php 
//require("classPokemon.php");
class PokemonPlante extends Pokemon {
    private $type;
    public function __construct($name, $url, $hp, $attackPokemon, $type){
        parent::__construct($name, $url, $hp,  $attackPokemon);
        $this->type=$type;
    }
  
    
  
    public function get_type(){
        return $this->type;
    }
    public function attack(Pokemon $p) {
        $attackPoints = rand($this->attackPokemon->get_attackMinimal(), $this->attackPokemon->get_attackMaximal());
        
        if ($this->attackPokemon->isSpecialAttack()) {
            $attackPoints *= $this->attackPokemon->get_specialAttack();
        }
        if (method_exists($p, 'get_type')) {
          $str = $p->get_type(); 
            if ($str == 'eau') {
                $attackPoints *= 2;
            }
            else{
                $attackPoints *= 0.5;
            }
        }
            $p->reduceHp($attackPoints);
            return $attackPoints;
        }
  };?>