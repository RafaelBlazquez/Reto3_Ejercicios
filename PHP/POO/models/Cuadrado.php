<?php
require_once "Poligono.php";
    class Cuadrado extends Poligono{

    public function calcularArea(){
        $area = (($this->anchura)*($this->altura));
        echo "cua: ".$area;
    }
}