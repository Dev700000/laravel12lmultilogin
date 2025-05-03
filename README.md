# Proyecto Laravel Multiusuarios

Este proyecto es una aplicación en Laravel 12 que implementa autenticación multiusuario con tres roles: **Administrador**, **Supervisor** y **Usuario**. Cada rol tiene su propio dashboard y acceso protegido mediante middleware personalizado.

## Características

- Laravel 12 con autenticación (Laravel UI + Bootstrap)
- Tres roles de usuario: Administrador, Supervisor y Usuario
- Redirección automática según el rol después del login
- Middleware personalizado para proteger rutas según el rol
- Soporte para base de datos SQLite (fácil de configurar)
- Seeders de ejemplo para crear usuarios de prueba

## Instalación

### Requisitos

- PHP 8.2 o superior
- Composer
- Node.js y npm
- SQLite (o cualquier base de datos soportada por Laravel)

### Pasos

1. **Clona el repositorio:**
    ```bash
    git clone https://github.com/tuusuario/laravelMultiUsers.git
    cd laravelMultiUsers
    ```

2. **Instala las dependencias:**
    ```bash
    composer install
    npm install
    ```

3. **Copia y configura el archivo de entorno:**
    ```bash
    copy .env.example .env
    ```
    Edita el archivo `.env` y configura la conexión a la base de datos. Para SQLite:
    ```
    DB_CONNECTION=sqlite
    DB_DATABASE=absolute/path/to/database.sqlite
    ```
    Crea el archivo SQLite si no existe:
    ```bash
    type nul > database\database.sqlite
    ```

4. **Genera la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

5. **Ejecuta las migraciones y seeders:**
    ```bash
    php artisan migrate --seed
    ```

6. **Compila los assets de frontend:**
    ```bash
    npm run build
    ```

7. **Inicia el servidor de desarrollo:**
    ```bash
    php artisan serve
    ```

## Usuarios de prueba

Después de ejecutar los seeders, puedes iniciar sesión con:

- **Administrador**
  - Email: `admin@example.com`
  - Contraseña: `password`
- **Supervisor**
  - Email: `supervisor@example.com`
  - Contraseña: `password`
- **Usuario**
  - Email: `user@example.com`
  - Contraseña: `password`

## Estructura del proyecto

- `app/Http/Middleware/CheckRole.php` — Middleware personalizado para verificar el rol
- `routes/web.php` — Rutas agrupadas y protegidas por rol
- `resources/views/` — Dashboards separados para cada rol
- `database/seeders/DatabaseSeeder.php` — Seeder para crear usuarios de ejemplo con roles

## Uso

- Al iniciar sesión, los usuarios son redirigidos automáticamente a su dashboard según su rol.
- El acceso a `/admin`, `/supervisor` y `/user` está protegido por middleware.

## Licencia

Este proyecto es open-source y está disponible bajo la licencia [MIT](LICENSE).
