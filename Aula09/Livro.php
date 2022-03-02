<?php
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';

    Class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($t, $a, $tp, $l){
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->setTotPag($tp);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($l);
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($t){
            $this->titulo = $t;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($a){
            $this->autor = $a;
        }

        public function getTotPag(){
            return $this->totPaginas;
        }

        public function setTotPag($tp){
            $this->totPaginas = $tp;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function setPagAtual($pa){
            $this->pagAtual = $pa;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function setAberto($a){
            $this->aberto = $a;
        }

        public function getLeitor(){
            return $this->leitor;
        }

        public function setLeitor($l){
            $this->leitor = $l;
        }

        public function detalhes(){
            echo "<hr> Livro {$this->getTitulo()} escrito por {$this->getAutor()}";
            echo "<br> Páginas {$this->getTotPag()} atual {$this->getPagAtual()}";
            echo "<br> Sendo Lido por {$this->getLeitor()->getNome()}";
        }

        public function abrir(){
            if(!$this->getAberto()){
                $this->setAberto(true);
            }
        }
        
        public function fechar(){
            if($this->getAberto()){
                $this->setAberto(false);
            }
        }

        public function folhear($p){
            if($this->getAberto() && $this->getTotPag() > $p){
                    $this->setPagAtual($p);
            }else{
                $this->setPagAtual(0);
            }
        }

        public function avancarPag(){
            if($this->getAberto() && $this->getPagAtual() < 300){
                $this->setPagAtual($this->getPagAtual() + 1);
            }
        }

        public function voltarPag(){
            if($this->getAberto() && $this->getPagAtual() > 0){
                $this->setPagAtual($this->getPagAtual() - 1);
            }
        }
    }