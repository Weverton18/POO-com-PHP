<?php

    Class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }

        public function apresentar(){
            echo "<p>----------------------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador {$this->getNome()}</p>";
            echo "<p>Veio diretamente de {$this->getNacionalidade()}</p>";
            echo "<p>tem {$this->getIdade()} anos e pesa {$this->getPeso()}Kg</p>";
            echo "<p>Ele tem {$this->getVitorias()} vitorias</p>";
            echo "<p>{$this->getDerrotas()} derrotas e {$this->getEmpates()} empates</p>";
        }

        public function status(){
            echo "<p>----------------------------------------</p>";
            echo "<p>{$this->getNome()} é um peso {$this->getCategoria()} ";
            echo "e já ganhou {$this->getVitorias()} vezes ";
            echo "perdeu {$this->getDerrotas()} vezes e ";
            echo "empatou {$this->getEmpates()} vezes</p>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($no){
            $this->nome = $no;
        }

        private function getNacionalidade(){
            return $this->nacionalidade;
        }

        private function setNacionalidade($na){
            $this->nacionalidade = $na;
        }

        private function getIdade(){
            return $this->idade;
        }

        private function setIdade($i){
            $this->idade = $i;
        }

        private function getAltura(){
            return $this->altura;
        }

        private function setAltura($a){
            $this->altura = $a;
        }

        private function getPeso(){
            return $this->peso;
        }

        private function setPeso($p){
            $this->peso = $p;
            $this->setCategoria();
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria(){
            if($this->getPeso() < 52.2){
                $categoria = 'Inválido';
            }else if($this->getPeso() <= 70.3){
                $categoria = 'Leve';
            }elseif($this->getPeso() <= 83.9){
                $categoria = 'Médio';
            }else if($this->getPeso() <= 120.2){
                $categoria = 'Pesado';
            }else{
                $categoria = 'Inválido';
            }
            $this->categoria = $categoria;
        }

        private function getVitorias(){
            return $this->vitorias;
        }

        private function setVitorias($v){
            $this->vitorias = $v;
        }

        private function getDerrotas(){
            return $this->derrotas;
        }

        private function setDerrotas($d){
            $this->derrotas = $d;
        }

        private function getEmpates(){
            return $this->empates;
        }

        private function setEmpates($e){
            $this->empates = $e;
        }
    }