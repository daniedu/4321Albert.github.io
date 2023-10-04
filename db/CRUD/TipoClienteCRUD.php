<?php
class TipoClienteCRUD {
    public static function create($nombre) {
        $tipoCliente = R::dispense('tipocliente');
        $tipoCliente->nombre = $nombre;
        return R::store($tipoCliente);
    }

    public static function read($tipoClienteId) {
        return R::load('tipocliente', $tipoClienteId);
    }

    public static function update($tipoClienteId, $nombre) {
        $tipoCliente = R::load('tipocliente', $tipoClienteId);
        if ($tipoCliente) {
            $tipoCliente->nombre = $nombre;
            R::store($tipoCliente);
            return true;
        }
        return false;
    }

    public static function delete($tipoClienteId) {
        $tipoCliente = R::load('tipocliente', $tipoClienteId);
        if ($tipoCliente) {
            R::trash($tipoCliente);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage) {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('tipocliente', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
