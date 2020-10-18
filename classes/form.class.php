<?php 
    class Form {

        private $data;
        public $showForm = 'p';

        // protected $formContent;

        public function __construct($data = array()) {
            $this->data = $data;
        }

        private function showForm($html) {
            return "<{$this->showForm}>$html</{$this->showForm}>";
        }

        private function getValue($index) {
            return isset($this->data[$index]) ? $this->data[$index] : null;
        }

        public function setText($name) {
            return $this->showForm('<input type="text" name="' . $name . '" value="' .$this->getValue($name) . '">');
        }

        public function setSubmit() {
            return $this->showForm('<button type="submit">Envoyer</button>');
        }
    }
