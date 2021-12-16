<?php
namespace Ejercicio3;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

abstract class User{

    protected $username,$nombre,$apellidos,$email,$password,$ultimo_acceso,$logger;
    
    public abstract function showActions(){
        
    }

    public function curar(){
        $this->logger->info("Me he curado");
    }
}