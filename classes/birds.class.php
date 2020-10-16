<?php 
    class Bird {
        public string $type = "sparrow";
        public string $color = "grey";
        public int $age = 5;
        public array $areas = ["europe", "north america", "asia"];

        public function sing() {
            echo "<br>$this->type : Cui Cui";
        }
        public function fly(string $destination) {
            if ($this->age>4) {
                echo "<br>The bird is flying to $destination";
            }
            else {
                echo "<br>This bird is too young to fly";
            }
        }
    }
?>