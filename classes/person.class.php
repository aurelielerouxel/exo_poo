<?php 
    class Person {
        private string $firstname;
        private string $lastname;
        private string $adress;

        public function setFirstname(string $firstname) {
            $this->firstname = $firstname;
        }
        public function setLastname(string $lastname) {
            $this->lastname = $lastname;
        }
        public function setAdress(string $adress) {
            $this->adress = $adress;
        }

        public function getFirstname():string {
            $this->firstname;
        }
        public function getLastname():string {
            $this->lastname;
        }
        public function getAdress():string {
            $this->adress;
        }

        public function getCoord() {
            return "Je m'appelle " . $this->firstname . " " . $this->lastname . " et j'habite au " . $this->adress . " .";
        }

        public function hydrate(array $data) {
            foreach ($data as $key => $value) {
                $method = "set" . ucfirst($key);
                $this->$method($value);
            }
        }
        public function __construct(array $data) {
            $this->hydrate($data);
        }
    }
?>