<?php
class TipoCliente extends \RedBeanPHP\SimpleModel {
    // Definir propiedades
    public $nombre;
    
    // Establecer relaciones
    public function bean() {
        return $this->ownUsuario;
    }
}
?>
