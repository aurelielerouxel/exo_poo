<?php 
    class OtherBird {
        public string $type;
        public string $color;
        public int $age;
        public array $areas;

        public function __construct($data) {
            // echo "<br>The object has been instantiated";
            $this->type = $data["type"];
            $this->color = $data["color"];
            $this->age = $data["age"];
            $this->areas = $data["areas"];

        }
        // public function __construct($data) {
        //     $this->type = $data;
        // }
    }
?>