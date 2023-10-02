<?php
require '../readBean/rb.php';

require '../readBean/rb-mysql.php';
class Sucursal extends \RedBean_SimpleModel {
    // Definir propiedades
    public $nombre;
    public $direccion;
    
    // Establecer relaciones
    public function bean() {
        return $this->ownReserva;
    }
}
?>
