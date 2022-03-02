<?php
    require_once 'Pessoa.php';

    Class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function getSetor(){
            return $this->setor;
        }

        public function setSetor($s){
            $this->setor = $s;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }

        public function setTrabalhando($t){
            $this->trabalhando = $t;
        }

        public function mudarTrabalho(){
            $this->setTrabalhando(!$this->getTrabalhando());
        }
    }