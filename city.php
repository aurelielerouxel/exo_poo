<?php 
    class City {
        protected string $ville;
        protected int $departement;

        public function setVille(string $ville) {
            $this->ville = $ville;
        }
        public function setDepartement(int $departement) {
            $this->departement = $departement;
        }

        public function getVille():string {
            return $this->ville;
        }
        public function getDepartement():int {
            return $this->departement;
        }

        public function showLocation():string {
            return "La ville " . $this->$ville . " est dans le département " . $this->$departement . " . ";
        }
    }
?>