<?php
class ReservaCRUD {
    public static function create($fecha) {
        $reserva = R::dispense('reserva');
        $reserva->fecha = $fecha;
        return R::store($reserva);
    }

    public static function read($reservaId) {
        return R::load('reserva', $reservaId);
    }

    public static function update($reservaId, $fecha) {
        $reserva = R::load('reserva', $reservaId);
        if ($reserva) {
            $reserva->fecha = $fecha;
            R::store($reserva);
            return true;
        }
        return false;
    }

    public static function delete($reservaId) {
        $reserva = R::load('reserva', $reservaId);
        if ($reserva) {
            R::trash($reserva);
            return true;
        }
        return false;
    }

    public static function listByPage($page, $itemsPerPage) {
        $offset = ($page - 1) * $itemsPerPage;
        return R::find('reserva', ' LIMIT ?, ?', [$offset, $itemsPerPage]);
    }
}
