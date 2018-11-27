<?php

class Persona{
    private $nombre;
    private $apellido;
    public $edad;
    public $altura;
    public $peso;
    
    public function __construct(){
        $this->nombre = 'Mario';
        $this->apellido = 'Robles';
    }
    
    public function nombre(){
        return $this->nombre;
    }
    
    public function apellido(){
        return $this->apellido;
    }
    
    public function edad(){
        return $this->edad;
    }
}