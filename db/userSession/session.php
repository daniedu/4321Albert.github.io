<?php
/**
 * Clase SessionManager
 * Una clase simple para administrar sesiones en PHP.
 */
class SessionManager {
    /**
     * Iniciar una nueva sesión o reanudar una sesión existente.
     */
    public static function startSession() {
        session_start();
    }

    /**
     * Establecer una variable de sesión.
     *
     * @param string $key   El nombre de la variable de sesión.
     * @param mixed  $value El valor que se almacenará en la sesión.
     */
    public static function setSessionData($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Obtener el valor de una variable de sesión.
     *
     * @param string $key El nombre de la variable de sesión.
     *
     * @return mixed El valor de la variable de sesión, o null si no existe.
     */
    public static function getSessionData($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    /**
     * Destruir la sesión actual.
     */
    public static function destroySession() {
        session_destroy();
    }
}

// <?php
// // Incluir la clase SessionManager
// include('SessionManager.php');

// // Iniciar una sesión
// SessionManager::startSession();

// // Establecer datos de sesión
// SessionManager::setSessionData('user_id', 123);
// SessionManager::setSessionData('username', 'usuario_ejemplo');

// // Obtener datos de sesión
// $user_id = SessionManager::getSessionData('user_id');
// $username = SessionManager::getSessionData('username');

// // Comprobar si los datos de sesión existen
// if ($user_id !== null && $username !== null) {
//     echo "ID de usuario: " . $user_id . "<br>";
//     echo "Nombre de usuario: " . $username . "<br>";
// } else {
//     echo "Los datos de sesión no están disponibles.";
// }

// // Destruir la sesión
// SessionManager::destroySession();
// ?>
