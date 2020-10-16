<?php 
    class Personne {
        private ?string $nom;
        private ?string $prenom;
        private ?string $adresse;

        public function setNom(?string $nom) {
            $this->nom = $nom;
        }
        public function setPrenom(?string $prenom) {
            $this->prenom = $prenom;
        }
        public function setAdresse(?string $adresse) {
            $this->adresse = $adresse;
        }

        public function getNom():string {
            $this->nom;
        }
        public function getPrenom():string {
            $this->prenom;
        }
        public function getAdresse():string {
            $this->adresse;
        }

        public function getCoord() {
            return "Je m'appelle " . $this->nom . " " . $this->prenom . " et j'habite au " . $this->adresse . " .";
        }
        public function __construct(string $nom, string $prenom, string $adresse) {
            $this->getNom($nom);
            $this->getPrenom($prenom);
            $this->getAdresse($adresse);
        }
    }
?>