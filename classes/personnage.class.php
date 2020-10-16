<?php 
    class Personnage {
        private $_force = 20;
        // private $_localisation;
        private $_experience = 0;
        private $_degats = 0;

        public function frapper(Personnage $personnage_a_frapper) {
            $personnage_a_frapper->_degats += $this->_force;
        }
        public function degats() {
            return $this->_degats;
        }
        public function force() {
            return $this->_force;
        }
        public function gagner_experience() {
            // echo $this->_experience = $this->_experience + 1;
            $this->_experience++;
        }
        public function afficher_experience() {
            echo $this->_experience;
        }
        public function deplacer(){

        }
        public function parler(){
            echo 'Je suis un personnage';
        }
    }
?>

