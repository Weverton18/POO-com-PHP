<?php
    require_once 'Aluno.php';

    Class Bolsista extends Aluno{
        private $bolsa;

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($b){
            $this->bolsa = $b;
        }

        public function RenovarBolsa(){
            echo "<p>Bolsa Renovada</p>";
        }

        public function PagarMensalidade(){
            echo "<p><b>{$this->getNome()}</b> é Bolsista! Então paga com desconto!</p>";
        }
    }