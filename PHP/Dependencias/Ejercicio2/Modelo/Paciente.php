<?php
namespace Ejercicio2;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class Paciente{

    private $nombre,$apellido,$edad,$logger;

    public function __construct($nombre,$apellido,$edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->logger = new Logger("logger");
        $this->logger->pushHandler(new StreamHandler('./app.log', Logger::DEBUG));
        $this->logger->pushHandler(new FirePHPHandler());
    }
    
    public function enfermar(){
        $this->logger->info("He enfermado");
    }

    public function curar(){
        $this->logger->info("Me he curado");
    }
}