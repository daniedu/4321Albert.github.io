<?php
class Sucursal extends \RedBean_SimpleModel
{
    // Definir propiedades
    public $nombre;
    public $direccion;

    // Establecer relaciones
    public $reservasEnSucursal;
}
