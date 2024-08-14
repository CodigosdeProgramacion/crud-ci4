# CRUD en PHP utilizando CodeIgniter 4

Este proyecto demuestra cómo implementar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) en PHP utilizando el framework CodeIgniter 4. Es ideal para aprender a manejar bases de datos y formularios en aplicaciones web con este framework.

## Requisitos Previos

- PHP 7.4 o superior
  - Extensión [intl](http://php.net/manual/en/intl.requirements.php)
  - Extensión [mbstring](http://php.net/manual/en/mbstring.installation.php)
- Servidor MySQL 5.7 o superior
- Composer instalado
- Servidor Apache o Nginx

## Instalación

1. Clona este repositorio en tu servidor local:
    ```bash
    git clone https://github.com/CodigosdeProgramacion/crud-ci4.git
    ```

2. Accede al directorio del proyecto:
    ```bash
    cd crud-ci4
    ```

3. Instala las dependencias del proyecto usando Composer:
    ```bash
    composer install
    ```

4. Configura tu archivo de entorno `.env` para la conexión con la base de datos. Renombra el archivo `env` a `.env` y actualiza los valores de configuración:

    ```bash
    database.default.hostname = localhost
    database.default.database = nombre_base_datos
    database.default.username = tu_usuario
    database.default.password = tu_contraseña
    database.default.DBDriver = MySQLi
    ```

5. Ejecuta las migraciones para crear las tablas necesarias y los seeders:
    ```bash
    php spark migrate

    php spark db:seed DepartamentosSeeder
    ```

6. Inicia el servidor de desarrollo de CodeIgniter:
    ```bash
    php spark serve
    ```

7. Abre tu navegador y accede a `http://localhost:8080/empleados` para ver la aplicación en funcionamiento.

## Funcionalidades

Este proyecto incluye las siguientes operaciones CRUD:

- **Crear**: Agregar nuevos registros a la base de datos.
- **Leer**: Mostrar una lista de registros almacenados.
- **Actualizar**: Modificar registros existentes.
- **Eliminar**: Borrar registros de la base de datos.

## Contribuciones

Siéntete libre de contribuir al proyecto.

## Expresiones de Gratitud 🎁

- Comenta a otros sobre este proyecto 📢
- Invitame una cerveza 🍺 o un café ☕ [Da clic aquí](https://www.paypal.com/paypalme/markorobles?locale.x=es_XC.).

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.
