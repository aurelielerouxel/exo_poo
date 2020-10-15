<?php 
    class City {
        protected ?string $city;
        protected int $departement;

        public function setCity(?string $city) {
            $this->city = $city;
            // return $this;
        }
        public function setDepartement(int $departement) {
            $this->departement = $departement;
            // return $this;
        }

        public function getCity():string {
            return $this->city;
        }
        public function getDepartement():int {
            return $this->departement;
        }

        public function showLocation() {
            return "La ville de " . $this->city . " est dans le département " . $this->departement . " . ";
        }
        
        public function __construct(string $city, int $departement) {
            $this->setCity($city);
            $this->setDepartement($departement);
        }
    }
?>