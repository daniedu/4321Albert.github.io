<?php
class Reserva extends \RedBeanPHP\SimpleModel {
    // Definir propiedades
    public $fecha;
    
    // Establecer relaciones
    // public function sucursal() {
    //     return $this->belongsTo('sucursal');
    // }

    public function servicios() {
        return $this->sharedServicio;
    }

    // public function usuario() {
    //     return $this->belongsTo('usuario');
    // }

    public function descuentos() {
        return $this->sharedDescuento;
    }
}
?>
