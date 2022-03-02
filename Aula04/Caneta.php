<?php

    class Caneta{
        private $modelo;
        private $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function __construct($m, $c, $p) {
            $this->setModelo($m);
            $this->setCor($c);
            $this->setPonta($p);
            $this->tampar();
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }


        public function getCor(){
            return $this->cor;
        }

        public function setCor($co){
            $this->cor = $co;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }

        public function getCarga(){
            return $this->carga;
        }

        public function setCarga($ca){
            $this->carga = $ca;
        }

        public function getTampada(){
            return $this->tampada;
        }

        public function setTampada($t){
            $this->tampada = $t;
        }

        public function rabiscar(){
            if($this->getTampada()){
                echo "<p>ERRO! Não posso rabiscar!</p>";
            }else{
                echo "<p>Estou Rabiscando ...</p>";
            }
        }

        public function tampar(){
            $this->setTampada(true);
        }

        public function destampar(){
            $this->setTampada(false);
        }
    }