<?php
require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade ;
require "model/zapatilla.php" ;
$zapatilla = new zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140Є");

echo Blade::render("zapatilla",["zapatilla" => $zapatilla]);
 
