<?php
class Descuento extends \RedBeanPHP\SimpleModel {
    // Definir propiedades
    public $nombre;
    public $cantidadServicios;
    
    // Establecer relaciones
    public function reserva() {
        return $this->sharedReserva;
    }
}
?>
