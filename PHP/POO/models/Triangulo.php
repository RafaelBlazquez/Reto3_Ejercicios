<?php
   
    
   require_once "Poligono.php";
    class Triangulo extends Poligono{

        public function calcularArea(){
            $anchura =$this->anchura;
            $altura =$this->altura;
            $area = (($anchura)*($altura))/2;
            echo "tri: ".$area;
        }
    }