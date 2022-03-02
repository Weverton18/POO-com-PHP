<?php

    Class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Métodos

        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($n){
            $this->numConta = $n;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($sa){
            $this->saldo = $sa;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($st){
            $this->status = $st;
        }

        public function abrirConta($tipo){
            $credito = ($tipo == 'CC') ? 50 : 150;
            $this->setTipo($tipo);
            $this->setStatus(true);
            $this->setSaldo($credito);
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            }else if($this->getSaldo() < 0){
                echo "<p>Conta está em debito. Impossível encerrar!</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada</p>";
            }
        }

        public function depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito de R$ {$v} na conta de {$this->getDono()}</p>";
            }else{
                echo "<p>Conta fechada. Não consigo depositar.</p>";
            }
        }

        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ {$v} autorizado na conta de {$this->getDono()}</p>";
                }else{
                    echo "<p>Saldo insuficiente para saque.</p>";
                }
            }else{
                echo "<p>Não posso sacar de uma conta fechada.</p>";
            }
        }

        public function pagarMensal(){
            $v = ($this->getTipo() == 'CC') ? 12 : 20;
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de {$v} debitada na conta de {$this->getDono()}</p>";
                }else{
                    echo "<p>Mensalidade não paga. Saldo insuficiente.</p>";
                }
            }else{
                echo "<p>Problemas com a conta, Não posso cobrar.</p>";
            }
        }
    }