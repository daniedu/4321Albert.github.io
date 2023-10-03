<?php
class ServicioCRUD {
    public static function create($nombre, $precio) {
        $servicio = R::dispense('servicio');
        $servicio->nombre = $nombre;
        $servicio->precio = $precio;
        return R::store($servicio);
    }

    public static function read($servicioId) {
        return R::load('servicio', $servicioId);
    }

    public static function update($servicioId, $nombre, $precio) {
        $servicio = R::load('servicio', $servicioId);
        if ($servicio) {
            $servicio->nombre = $nombre;
            $servicio->precio = $precio;
            R::store($servicio);
            return true;
        }
        return false;
    }

    public static function delete($servicioId) {
        $servicio = R::load('servicio', $servicioId);
        if ($servicio) {
            R::trash($servicio);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage) {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('servicio', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
