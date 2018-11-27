<?php

// require <- Es necesario si o si, en caso no exista lo que se requiere no se ejecutara.
// include <- No es indispensable para el funcionamiento.

require_once '10-OrientadoObjetos.php';

class Deportista extends Persona{
    public $pais;
    public $deporte;
    
    public function correr() {
        return 'El deportista esa corriendo';
    }
    
    public function saltar() {
        return 'El deportista esa saltar';
    }
    
    public function nadar() {
        return 'El deportista esa nadar';
    }
}