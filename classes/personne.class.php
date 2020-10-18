<?php 
    class Personne {
        protected string $nom;
        protected string $prenom;

        public function setNom(string $nom) {
            $this->nom = $nom;
        }
        public function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }

        public function getNom():string {
            return $this->nom;
        }
        public function getPrenom():string {
            return $this->prenom;
        }

        public function hydrate(array $data) {
            foreach($data as $key => $value) {
                $method = "set". ucfirst($key);
                $this->$method($value);
            }
        }
    }
?>