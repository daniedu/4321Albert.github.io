<?php
class Reserva extends \RedBeanPHP\SimpleModel
{
    // Definir propiedades
    public $fecha;

    // Establecer relaciones
    public $sucursalAsociada;
    public $serviciosAsociados;
    public $clienteAsociado;
    public $descuentoAplicado;
}
