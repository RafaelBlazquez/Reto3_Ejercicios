<?php
    include 'models/Publicacion2.php';

    use models\Publicacion;

    $publicacion1 = new Publicacion("Rascu y Podri",2019,"DLH","Jupiter","Nace en Creta el dios mas sensual,");
    $publicacion1->leer();
    echo "<br>";
    $publicacion1->escribir(" es el hijo de un SATURNOOOO");
    $publicacion1->leer();
    echo "<br>";
    echo "<br>";