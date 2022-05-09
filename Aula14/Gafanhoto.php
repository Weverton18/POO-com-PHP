<?php
    require_once 'Pessoa.php';

    Class Gafanhoto Extends Pessoa{
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->setLogin($login);
            $this->setTotAssistido(0);
        }

        public function assistirMaisUm(){
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }

        public function getLogin(){
            return $this->login;
        }

        public function setLogin($l){
            $this->login = $l;
        }

        public function getTotAssistido(){
            return $this->totAssistido;
        }

        public function setTotAssistido($ta){
            $this->totAssistido = $ta;
        }
    }