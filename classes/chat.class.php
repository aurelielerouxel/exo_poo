<?php
    class Chat {
        private string $name;
        private int $age;

        const FEMALE = "famale";
        const MALE = "male";
        const COLOR = [
            "noir" => 0,
            "blanc" => 1,
            "roux" => 2,
            "tigré" => 3,
            "tacheté" => 4
        ];

        public function setName(string $name) {
            $this->name = $name;
        }
        public function setAge(int $age) {
            $this->age = $age;
        }
        public function setSex(string $sex) {
            if (in_array($sex, [self::FEMALE, self::MALE])) {  
            $this->sex = $sex;
        }
        public function setColor(int $color) {
            $this->color = $color;
        }

        public function getName():string {
            $this->name;
        }
        public function getAge():int {
            $this->age;
        }
        public function getSex():string {
            $this->sex;
        }
        public function getColor():int {
            $this->color;
        }

        public function __construct() {

        }
    }
?>