<?php
    require_once 'interface.php';
        class calculo implements calculadora{
            protected $num1;
            protected $num2;
            protected $resul;

            function __construct($num1, $num2){
                $this->setNum1($num1);
                $this->setNum2($num2); 
            }
            
            function calcularSoma();
            function calcularSubtracao();
            function calcularDivisao();
            function calcularMultiplicacao();

            function getNum1(){
                return $this->$num1;
            }
            function setNum1($num1){
                $this->$num1 = $num1;
            }
            
            function getNum2(){
                return $this->$num2;
            }
            function setNum1($num2){
                $this->$num2 = $num2;
            }

            function getResul(){
                return $this->$resul;
            }
            function setResul($resul){
                $this->$resul = $resul;
            }
            
        }