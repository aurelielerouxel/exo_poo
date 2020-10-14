<?php 
    class Student {
        protected string $name = "Timmy";
        protected int $age = 35;
    }
    public function setName(string $studentName) {
        return $this->name;
    }
?>