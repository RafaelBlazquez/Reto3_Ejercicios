<?php

require "vendor/autoload.php";
require "Modelo/Paciente.php";
use Ejercicio2\Paciente;
echo "<a href=\"index.php?accion=curar\">Curar</a>";
echo "</br>";
echo "<a href=\"index.php?accion=enfermar\">Enfermar</a>";

if(isset($_GET["accion"])){
    $pac = new Paciente("nombre","apellido",6);
    switch ($_GET["accion"]){
        case "curar":
            $pac->curar();
            break;
        case "enfermar":
            $pac->enfermar();
            break;
    }
}