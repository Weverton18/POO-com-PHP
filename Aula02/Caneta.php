<?php

    class Caneta{
        var $modelo;
        var $cor;
        var $carga;
        var $ponta;
        var $tampada;

        function rabiscar(){
            if($this->tampada){
                echo "<p>ERRO! Não posso rabiscar!</p>";
            }else{
                echo "<p>Estou Rabiscando ...</p>";
            }
        }

        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this->tampada = false;
        }
    }