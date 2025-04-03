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