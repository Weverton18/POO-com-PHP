<?php
    require_once 'Pessoa.php';

    Class Aluno extends Pessoa{
        private $matricula;
        private $curso;

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

        public function CancelarMatr(){
            if($this->getMatricula()){
                $this->setMatricula(false);
                echo "<p>Matricula será Cancelada!</p>";
            }
        }
    }