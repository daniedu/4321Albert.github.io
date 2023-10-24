### Configuración Inicial

```php
require 'rb.php'; // Importa RedBeanPHP

// Configura RedBeanPHP con tus credenciales de base de datos
R::setup('mysql:host=localhost;dbname=tu_base_de_datos', 'tu_usuario', 'tu_contraseña');
R::freeze(true); // Activa el modo de producción
```

```php
class ProductoCRUD {
    public static function create($nombre, $precio) {
        // Crea un nuevo producto en la tabla "productos"
        $producto = R::dispense('productos');
        $producto->nombre = $nombre;
        $producto->precio = $precio;
        $id = R::store($producto); // Guarda el producto en la base de datos
        return $id;
    }

    public static function read($id) {
        // Lee un producto por su ID
        $producto = R::load('productos', $id);
        if ($producto->id) {
            return $producto;
        } else {
            return null;
        }
    }

    public static function update($id, $nombre, $precio) {
        // Actualiza un producto existente
        $producto = R::load('productos', $id);
        if ($producto->id) {
            $producto->nombre = $nombre;
            $producto->precio = $precio;
            R::store($producto); // Guarda los cambios
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id) {
        // Borra un producto por su ID
        $producto = R::load('productos', $id);
        if ($producto->id) {
            R::trash($producto); // Borra el producto
            return true;
        } else {
            return false;
        }
    }
}
```

Utilizando la Clase ProductoCRUD
Ahora puedes utilizar la clase ProductoCRUD para realizar operaciones CRUD en la tabla de productos:

```php
// Ejemplo de creación de un nuevo producto
$productoId = ProductoCRUD::create('Producto de Ejemplo', 19.99);

// Ejemplo de lectura de un producto
$producto = ProductoCRUD::read($productoId);

// Ejemplo de actualización de un producto
ProductoCRUD::update($productoId, 'Nuevo Nombre', 29.99);

// Ejemplo de eliminación de un producto
ProductoCRUD::delete($productoId);
```
