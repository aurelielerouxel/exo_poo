<?php 
    class Clio {
        protected int $door;
        protected string $color;
        protected int $price;

        public function __construct() {

        }

        public function getDoor() {
            echo $this->door;
        }
        public function getColor() {
            echo $this->color;
        }
        public function getPrice() {
            echo $this->price;
        }

        public function setDoor() {
            $this->door = $door;
        }
        public function setColor() {
            $this->color = $color;
        }
        public function setPrice() {
            $this->price = $price;
        }
    }
?>