<?php
class SucursalCRUD {
    public static function create($nombre, $direccion) {
        $sucursal = R::dispense('sucursal');
        $sucursal->nombre = $nombre;
        $sucursal->direccion = $direccion;
        return R::store($sucursal);
    }

    public static function read($sucursalId) {
        return R::load('sucursal', $sucursalId);
    }

    public static function update($sucursalId, $nombre, $direccion) {
        $sucursal = R::load('sucursal', $sucursalId);
        if ($sucursal) {
            $sucursal->nombre = $nombre;
            $sucursal->direccion = $direccion;
            R::store($sucursal);
            return true;
        }
        return false;
    }

    public static function delete($sucursalId) {
        $sucursal = R::load('sucursal', $sucursalId);
        if ($sucursal) {
            R::trash($sucursal);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage) {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('sucursal', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
