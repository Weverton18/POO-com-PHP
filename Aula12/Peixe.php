<?php
    require_once 'Animal.php';

    Class Peixe Extends Animal{
        private $corEscama;

        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($ce){
            $this->corEscama = $ce;
        }

        public function SoltarBolha(){
            echo "<p>Soltando Bolhas!<p/>";
        }

        public function locomover(){
            echo "<p>Nadando!<p/>";
        }

        public function alimentar(){
            echo "<p>Comendo substancias!<p/>";
        }

        public function emitirSom(){
            echo "<p>Peixe não emite som!<p/>";
        }
    }