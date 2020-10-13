<?php 
    class OtherBird {
        public string $type = "sparrow";
        public string $color = "grey";
        public int $age = 5;
        public array $areas = ["europe", "north america", "asia"];

        public function __construct($type) {
            // echo "<br>The object has been instantiated";
            $this->type = $type;
        }
        // public function __construct($data) {
        //     $this->type = $data;
        // }
    }
?>