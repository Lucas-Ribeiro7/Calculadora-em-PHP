<?php
        class calculo{
            protected $num1;
            protected $num2;
            protected $resul;

            function __construct($num1, $num2){
                $this->setNum1($num1);
                $this->setNum2($num2); 
            }
            
            

            function getNum1(){
                return $this->$num1;
            }
            function setNum1($num1){
                $this->$num1 = $num1;
            }
            
            function getNum2(){
                return $this->$num2;
            }
            function setNum2($num2){
                $this->$num2 = $num2;
            }

            function getResul(){
                return $this->$resul;
            }
            function setResul($resul){
                $this->$resul = $resul;
            }
            
        }