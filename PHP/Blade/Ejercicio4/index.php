<?php
require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade ;
require "model/zapatilla.php";
$nombre = "ZAPAPLUS";
$zapatillas = [];
$zapatilla = new zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140Є");
array_push($zapatillas,$zapatilla);
$zapatilla = new zapatilla("Nike","Messi X7 Plus","Zapatilla de fútbol","99Є");
array_push($zapatillas,$zapatilla);
$zapatilla = new zapatilla("Nike","Air Jordan","Zapatilla de baloncesto","135Є");
array_push($zapatillas,$zapatilla);
echo Blade::render("zapatillas",["zapatillas" => $zapatillas,"nombre" => $nombre]);

