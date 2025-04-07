<?php class AttackPokemon {
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
    };?>