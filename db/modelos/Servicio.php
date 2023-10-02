<?php
class Servicio extends \RedBeanPHP\SimpleModel {
    // Definir propiedades
    public $nombre;
    public $precio;
    
    // Establecer relaciones
    public function bean() {
        return $this->sharedReserva;
    }
}
?>
