<?php
    require_once 'Animal.php';

    Class Mamifero extends Animal{
        protected $corPelo;

        public function emitirSom(){
            echo "<p>Som de Mamífero!</p>";
        }
    }