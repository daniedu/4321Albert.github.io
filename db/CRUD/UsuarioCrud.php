<?php
class UsuarioCRUD {
    public static function create($nombre, $email) {
        $usuario = R::dispense('usuario');
        $usuario->nombre = $nombre;
        $usuario->email = $email;
        return R::store($usuario);
    }

    public static function read($usuarioId) {
        return R::load('usuario', $usuarioId);
    }

    public static function update($usuarioId, $nombre, $email) {
        $usuario = R::load('usuario', $usuarioId);
        if ($usuario) {
            $usuario->nombre = $nombre;
            $usuario->email = $email;
            R::store($usuario);
            return true;
        }
        return false;
    }

    public static function delete($usuarioId) {
        $usuario = R::load('usuario', $usuarioId);
        if ($usuario) {
            R::trash($usuario);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage) {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('usuario', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
