<?php
    require_once 'AcoesVideo.php';

    Class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo){
            $this->setTitulo($titulo);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        public function play(){
            if(!$this->getReproduzindo()){
                $this->setReproduzindo(true);
            }
        }

        public function pause(){
            if($this->getReproduzindo()){
                $this->setReproduzindo(false);
            }
        }

        public function like(){
            $this->setCurtidas($this->getCurtidas()+1);
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($t){
            $this->titulo = $t;
        }

        public function getAvaliacao(){
            return $this->avaliacao;
        }

        public function setAvaliacao($a){
            $this->avaliacao = $a;
        }
        public function getViews(){
            return $this->views;
        }

        public function setViews($v){
            $this->views = $v;
        }
        public function getCurtidas(){
            return $this->curtidas;
        }

        public function setCurtidas($c){
            $this->curtidas = $c;
        }
        public function getReproduzindo(){
            return $this->reproduzindo;
        }

        public function setReproduzindo($r){
            $this->reproduzindo = $r;
        }
    }