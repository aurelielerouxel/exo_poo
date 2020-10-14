<?php 
    class Student {
        protected string $name;
        protected int $age;
    
        public function setName(string $name) {
            if(strlen($name) > 2) {
                $this->name = $name;
            }
            else {
                throw new Exception("Votre nom n'est pas assez long et certainement super nul.");
            }
        }
        public function setAge(int $age) {
            if($age >= 16 AND $age<=70 ) {
                $this->age = $age;
            }
            else {
                throw new Exception("T'es trop jeune ou trop vieux frère.");
            }
        }

    }
?>