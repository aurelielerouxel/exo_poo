<?php 
    class adminElecteur extends Personne {
        protected string $bureau_de_vote;
        protected bool $vote;

        public function setBureau_de_vote(string $bureau_de_vote) {
            $this->bureau_de_vote = $bureau_de_vote;
        }

        public function setVote(bool $vote) {
            $this->vote = $vote;
        }

        public function getBureau_de_vote():string {
            $this->bureau_de_vote;
        }

        public function getVote():bool {
            $this->vote;
        } 

        public function aVoter() {
            if($this->vote == true) {
                echo "<p>" . $this->nom . " " . $this->prenom . " a voté au bureau de vote de " . $this->bureau_de_vote . " ." . "</p>";
            }
            else {
                return "Vous avez déjà voter dans le bureau de vote : " . $this->bureau_de_vote . " .";
            }
        }

        public function __construct(array $data) {
// CORRECTION-------------------------------------------------
            $this->vote = false;
            $this->hydrate($data);
        }
    }
?>