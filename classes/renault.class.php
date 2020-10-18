<?php 
    class Clio {

        // Tous les attributs en privé
        protected int $door;
        protected int $color;
        protected int $price;

        // Déclarations des constantes en rapport avec la clio
        const TWO_DOORS = 2;
        const FIVE_DOORS = 5;
        const COLOR = [
            "rouge" => 01234567,
            "bleu" => 12345678,
            "noire" => 23456789,
            "blanche" => 34567890,
            "verte" => 45678901,
            "jaune" => 56789012,
            "orange" => 67890123,
            "gris" => 78901234
        ];
        const PRICE = 9500;

        public function setDoor(int $door) {
            // $this->door = $door;
            if (in_array($door, [self::TWO_DOORS, self::FIVE_DOORS])) {
                $this->door = $door;
            }
        }
        public function setColor(int $color) {
            $this->color = $color;
        }
        public static function setPrice(int $price) {
            // $this->price = $price;
// CORRECTION ------------------------------------------------
            self::$price = $price;
        }

        public function getDoor():int {
            return $this->door;
        }
        public function getColor():int {
            return $this->color;
        }
        public function getPrice():int {
            return $this->price;
        }
        
// CORRECTION ----------------------------------------------------------
        // public function getCar() {
        //     return "Achat de la clio " . $this->door . " portes de couleur " . $this->color . " au prix de " . $this->price . " .";
        // }

        public function hydrate(array $data) {
            foreach($data as $key => $value) {
                $method = "set" . ucfirst($key);
                $this->$method($value);
            }
        }

        public function __construct(array $data) {
            $this->hydrate($data);
        }

    }
?>