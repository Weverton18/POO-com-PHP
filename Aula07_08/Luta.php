<?php
    require_once 'Lutador.php';

    Class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        private function getDesafiado(){
            return $this->desafiado;
        }

        private function setDesafiado($d){
            $this->desafiado = $d;
        }

        private function getDesafiante(){
            return $this->desafiante;
        }

        private function setDesafiante($d){
            $this->desafiante = $d;
        }

        private function getRounds(){
            return $this->rounds;
        }

        private function setRounds($r){
            $this->roudns = $r;
        }

        private function getAprovada(){
            return $this->aprovada;
        }

        private function setAprovada($a){
            $this->aprovada = $a;
        }

        public function marcaLuta($l1, $l2){
            if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar(){
            if($this->getAprovada()){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);

                switch($vencedor){
                    case 0:
                        echo "<p>Empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    case 1:
                        echo "<p>{$this->desafiado->getNome()}</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;
                    case 2:
                        echo "<p>{$this->desafiante->getNome()}</p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                    break;
                }
            }else{
                echo "<p>Luta não pode acontecer!</p>";
            }
        }
    }