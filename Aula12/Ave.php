<?php
    require_once 'Animal.php';

    Class Ave Extends Animal{
        private $corPena;

        public function getCorPena(){
            return $this->corPena;
        }

        public function setCorPena($cp){
            $this->corPena = $cp;
        }

        public function fazerNinho(){
            echo "<p>Construir Ninho!<p/>";
        }

        public function locomover(){
            echo "<p>Voando!<p/>";
        }

        public function alimentar(){
            echo "<p>Comendo frutas!<p/>";
        }

        public function emitirSom(){
            echo "<p>Som de Ave!<p/>";
        }
    }
