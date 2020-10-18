<?php 
    class adminClient extends Personne {
        protected string $adresse;

        public function setAdresse(string $adresse) {
            $this->adresse = $adresse;
        }

        public function getAdresse():string {
            $this->adresse;
        }

        public function getCoord() {
            echo $this->nom . " " . $this->prenom . " habite au " . $this->adresse . " .";
        }

        public function __construct(array $data) {
            $this->hydrate($data);
        }
    }
?>