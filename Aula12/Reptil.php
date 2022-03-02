<?php
    require_once 'Animal.php';

    Class Reptil Extends Animal{
        private $corEscama;

        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($ce){
            $this->corEscama = $ce;
        }

        public function locomover(){
            echo "<p>Rastejando!<p/>";
        }

        public function alimentar(){
            echo "<p>Comendo Vegetais!<p/>";
        }

        public function emitirSom(){
            echo "<p>Som de Réptil!<p/>";
        }
    }