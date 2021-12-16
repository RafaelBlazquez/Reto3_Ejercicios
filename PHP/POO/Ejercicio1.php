<?php
    include "models/Publicacion1.php";

    $primera = new Publicacion("Jaime",1999,"LaCasa","Jeronimo Stilton","Mi nombre es Stilton.");
    $primera->leer();
    echo "<br>";
    $primera->escribir(" Jeronimo Stilton");
    $primera->leer();
    echo "<br>";
    echo "<br>";
    $segunda = new Publicacion("Pascu y Rodri",2015,"DLH","El conejo","Erase una vez, en un bello lugar,");
    $segunda->leer();
    echo "<br>";
    $segunda->escribir(" unos conejitos se disponen a viajar");
    $segunda->leer();
    echo "<br>";
    echo "<br>";