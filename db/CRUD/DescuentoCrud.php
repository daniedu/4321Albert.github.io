<?php
class DescuentoCRUD {
    public static function create($nombre, $cantidadServicios) {
        $descuento = R::dispense('descuento');
        $descuento->nombre = $nombre;
        $descuento->cantidadServicios = $cantidadServicios;
        return R::store($descuento);
    }

    public static function read($descuentoId) {
        return R::load('descuento', $descuentoId);
    }

    public static function update($descuentoId, $nombre, $cantidadServicios) {
        $descuento = R::load('descuento', $descuentoId);
        if ($descuento) {
            $descuento->nombre = $nombre;
            $descuento->cantidadServicios = $cantidadServicios;
            R::store($descuento);
            return true;
        }
        return false;
    }

    public static function delete($descuentoId) {
        $descuento = R::load('descuento', $descuentoId);
        if ($descuento) {
            R::trash($descuento);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage) {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('descuento', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
