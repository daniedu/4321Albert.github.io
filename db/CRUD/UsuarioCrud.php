
<?php

class UsuarioCRUD
{
    public static function create($nombre, $apellidos, $email, $username, $password)
    {
        $usuario = R::dispense('usuario');
        $usuario->nombre = $nombre;
        $usuario->apellidos = $apellidos;
        $usuario->email = $email;
        $usuario->username = $username;
        $usuario->password = $password;

        return R::store($usuario);
    }
    public static function login($username, $password)
    {
        $usuario = R::findOne('usuario', 'username = ?', [$username]);

        if ($usuario && $password === $usuario->password) {
            return $usuario;
        }

        return null;
    }
    public static function read($usuarioId)
    {
        return R::load('usuario', $usuarioId);
    }

    public static function updatePassword($usuarioId, $password)
    {
        $usuario = R::load('usuario', $usuarioId);
        if ($usuario) {
            $usuario->password = $password;

            R::store($usuario);
            return true;
        }
        return false;
    }
    public static function update($usuarioId, $nombre, $apellidos, $email, $username)
    {
        $usuario = R::load('usuario', $usuarioId);
        if ($usuario) {
            $usuario->nombre = $nombre;
            $usuario->apellidos = $apellidos;
            $usuario->email = $email;
            $usuario->username = $username;

            R::store($usuario);
            return true;
        }
        return false;
    }

    public static function delete($usuarioId)
    {
        $usuario = R::load('usuario', $usuarioId);
        if ($usuario) {
            R::trash($usuario);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage)
    {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('usuario', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
