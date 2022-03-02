<?php
    require_once 'Animal.php';

    Class Mamifero Extends Animal{
        private $corPelo;

        public function setCorPelo($cp){
            $this->corPelo = $cp;
        }

        public function getCorPelo(){
            return $this->corPelo;
        }

        public function locomover(){
            echo "<p>Correndo!<p/>";
        }

        public function alimentar(){
            echo "<p>Mamando!<p/>";
        }

        public function emitirSom(){
            echo "<p>Som de Mamífero!<p/>";
        }
    }
