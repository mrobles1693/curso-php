<?php

class Persona{
    private $nombre;
    private $apellido;
    public $edad;
    
    public function __construct(){
        $this->nombre = 'Mario';
        $this->apellido = 'Robles';
        $this->edad = 25;
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