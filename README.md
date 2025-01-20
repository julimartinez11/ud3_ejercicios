# Proyecto UD3 Ejercicios

Este repositorio contiene la implementación de una API para la gestión de alumnos, notas y asignaturas, utilizando Laravel. El proyecto es parte de los ejercicios propuestos en el bloque UD3.2 del curso.

## Requisitos Tecnológicos

Para ejecutar y trabajar en este proyecto, necesitarás:

- PHP >= 7.4
- Composer
- Laravel 8.x
- MySQL o MariaDB
- Postman para probar las API
---
### Pasos para configurar el proyecto
Clonar el repositorio desde GitHub 
Acceder al directorio del proyecto
Navega hasta la carpeta del proyecto clonado:
Copiar el archivo .env.example a .env
Este archivo contiene la configuración de tu entorno. Crea el archivo .env con:
cp .env.example .env
Luego, edita el archivo .env para configurar las credenciales de la base de datos. Por ejemplo:
DB_CONNECTION=mariadb
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=test2
DB_USERNAME=root
DB_PASSWORD=m1_s3cr3t
Instalar las dependencias del proyecto
Asegúrate de que Composer esté instalado y ejecuta:
composer install
Generar la clave de la aplicación
Laravel necesita una clave única para su aplicación. Genera esta clave con:
php artisan key:generate
Configurar la base de datos
Ejecuta las migraciones para crear las tablas necesarias:
php artisan migrate
Si deseas datos de prueba, ejecuta los seeders:
php artisan db:seed
Iniciar el servidor de desarrollo
Inicia el servidor de Laravel con:
php artisan serve
Esto abrirá el proyecto en la dirección:
http://127.0.0.1:8000
Probar los endpoints con Postman
Importa la colección de postman desde la raíz del proyecto en Postman.
Realiza pruebas de los endpoints definidos en las rutas API (/api/alumnos, /api/notas, /api/asignaturas).
