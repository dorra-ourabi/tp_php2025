<?php 
class Pokemon {
    protected $name;
    protected $url;
    protected $hp;
    protected $attackPokemon;

    public function __construct($name, $url, $hp, $attackPokemon) {
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

    public function reduceHp($damage) {
        $this->hp -= $damage;
    }

    public function whoAmI() {
        echo "<h3>{$this->name}</h3>";
        echo "<img src='{$this->url}' alt='{$this->name}' width='100'><br>";
        echo "Points de vie : {$this->hp}<br>";
    }
};?>