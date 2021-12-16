<?php
    include 'models/Poligono.php';
    include 'models/Cuadrado.php';
    include 'models/Triangulo.php';
    
    $tri = new Triangulo("Azul",20,20);
    $tri->calcularArea();
    echo "<br>";
    $cua = new Cuadrado("Verde",20,20);
    $cua->calcularArea();
    echo "<br>";

