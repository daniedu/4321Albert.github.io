<?php
class CotizacionCRUD
{
    public static function create($nombre, $correo, $telefono, $servicio, $fecha, $personas, $comentarios)
    {
        $cotizacion = R::dispense('cotizacion');
        $cotizacion->nombre = $nombre;
        $cotizacion->correo = $correo;
        $cotizacion->telefono = $telefono;
        $cotizacion->servicio = $servicio;
        $cotizacion->fecha = $fecha;
        $cotizacion->personas = $personas;
        $cotizacion->comentarios = $comentarios;
        return R::store($cotizacion);
    }

    public static function read($cotizacionId)
    {
        return R::load('cotizacion', $cotizacionId);
    }
    public static function findByID($cotizacionId)
    {
        $cotizacion = R::findOne('cotizacion', 'id = ?', [$cotizacionId]);
        return $cotizacion;
    }
    public static function update($cotizacionId, $nombre, $correo, $telefono, $servicio, $fecha, $personas, $comentarios)
    {
        $cotizacion = R::load('cotizacion', $cotizacionId);
        if ($cotizacion) {
            $cotizacion->nombre = $nombre;
            $cotizacion->correo = $correo;
            $cotizacion->telefono = $telefono;
            $cotizacion->servicio = $servicio;
            $cotizacion->fecha = $fecha;
            $cotizacion->personas = $personas;
            $cotizacion->comentarios = $comentarios;
            R::store($cotizacion);
            return true;
        }
        return false;
    }

    public static function delete($cotizacionId)
    {
        $cotizacion = R::load('cotizacion', $cotizacionId);
        if ($cotizacion) {
            R::trash($cotizacion);
            return true;
        }
        return false;
    }
}
