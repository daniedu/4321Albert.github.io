<?php
class Usuario extends \RedBeanPHP\SimpleModel {
    // Definir propiedades
    public $nombre;
    public $email;
    
    // Establecer relaciones
    public function bean() {
        return $this->ownReserva;
    }
}
?>
