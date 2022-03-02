<?php
    require_once 'Pessoa.php';

    Class Aluno extends Pessoa{
        private $curso;
        private $matricula;

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($m){
            $this->matricula = $m;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($c){
            $this->curso = $c;
        }

        Public function PagarMensalidade(){
            echo "<p>Pagando Mensalidade do aluno <b>{$this->getNome()}</b></p>";
        }
    }