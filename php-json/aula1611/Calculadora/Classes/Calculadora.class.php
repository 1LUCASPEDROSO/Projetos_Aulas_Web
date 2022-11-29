<?php

    class Calculadora {
        private $valor1;
        private $valor2;
        private $operacao;
        
        public function __get($atributo){
            return $this->$atributo;
        }
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        public function calcular(){
            switch($this->operacao){
                case 1:return $this->valor1 + $this->valor2;
                case 2:return $this->valor1 - $this->valor2;
                case 3:return $this->valor1 * $this->valor2;
                case 4:return $this->valor1 / $this->valor2;
                default:return 'Operação inválida.';
            }
        }
    }
?>