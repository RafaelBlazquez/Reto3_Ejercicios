<?php

namespace models;

class Publicacion{

    private $autores,$ano,$editorial,$titulo,$texto;

    public function __construct($autores,$ano,$editorial,$titulo,$texto){
        $this->autores = $autores;
        $this->ano = $ano;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }
    
    public function leer(){
        echo $this->texto;
    }

    public function escribir($anadir){
        $this->texto .= $anadir;
    }
    
}