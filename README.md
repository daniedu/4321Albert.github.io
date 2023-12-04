# Proyecto de Base de Datos

Este proyecto utiliza un archivo `.env` para configurar las variables de entorno necesarias para la conexión a la base de datos. A continuación, se detallan los pasos para configurar el archivo `.env` y agregar las variables requeridas.

## Configuración del archivo .env

1. En el directorio raíz de este proyecto, crea un archivo llamado `.env`. Puedes hacerlo manualmente o utilizar un editor de texto de tu elección.

2. Abre el archivo `.env` en tu editor de texto y agrega las siguientes variables de entorno con sus respectivos valores:

Ejemplos

```
DB_HOST=localhost
DB_USER=root
DB_DATABASE=unadproyect
DB_PORT=3306
DB_PASS=

```

- `DB_HOST`: La dirección del servidor de la base de datos, localmente es "localhost". Puedes cambiarlo si la base de datos esta fuera de la base de datos local.
- `DB_USER`: El nombre de usuario para acceder a la base de datos.
- `DB_DATABASE`: El nombre de la base de datos a la que deseas conectarte.
- `DB_PORT`: El puerto de la base de datos en caso de que sea diferente al predeterminado="3306".
- `DB_PASS`: La contraseña del usuario para acceder a la base de datos, si no hay se deja vacia.

3. Guarda y cierra el archivo `.env`.
