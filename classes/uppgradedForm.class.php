<?php 
    class uppgradedForm extends form {
        
        public function setRadio() {
            foreach ($buttons as $key => $value) {
                $this->$formContent .="<input type='radio' name='$name' value='$value'>$key<br>";
            }
        }

        public function setCheckbox(string $name, array $buttons) {
            foreach ($buttons as $key => $value) {
                $this->formContent .= "<input type='checkbox' name='$name' value='$value'>$key<br>";
            }
        }

        function __construct($action) {
            parent::__construct($action);
        }
    }
?>