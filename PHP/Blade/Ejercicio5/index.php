<?php
require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade;
use ejercicio5\Zapatilla;

$nombre = "ZAPAPLUS";
$zapatillas = [];
$zapatilla = new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140Є");
array_push($zapatillas,$zapatilla);
$zapatilla = new Zapatilla("Nike","Messi X7 Plus","Zapatilla de fútbol","99Є");
array_push($zapatillas,$zapatilla);
$zapatilla = new Zapatilla("Nike","Air Jordan","Zapatilla de baloncesto","135Є");
array_push($zapatillas,$zapatilla);
echo Blade::render("zapatillas",["zapatillas" => $zapatillas,"nombre" => $nombre]);

