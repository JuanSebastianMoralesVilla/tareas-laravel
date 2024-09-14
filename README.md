
# 📚 Tareas Laravel

Este es un proyecto de una lista de tareas creada con el framework Laravel. El propósito de este proyecto es implementar una aplicación simple que permita a los usuarios crear, leer, actualizar y eliminar tareas.

## Características

- **CRUD de Tareas:** Crear, leer, actualizar y eliminar tareas.
- **Gestión de Categorías:** Cada tarea puede estar asociada a una categoría.
- **Validaciones de Formulario:** Los formularios están validados para asegurar que los campos obligatorios estén completos.
- **Interfaz de Usuario Intuitiva:** Una interfaz de usuario simple y limpia para gestionar las tareas.

## Requisitos

- PHP 8.0+
- Composer
- Laravel 9.x
- MySQL o cualquier base de datos compatible con Laravel

## Instalación

1. Clona este repositorio en tu máquina local:

    ```bash
    git clone https://github.com/JuanSebastianMoralesVilla/tareas-laravel.git
    ```

2. Instala las dependencias con Composer:

    ```bash
    composer install
    ```

3. Copia el archivo `.env.example` a `.env` y configura tu base de datos:

    ```bash
    cp .env.example .env
    ```

4. Genera una clave de aplicación de Laravel:

    ```bash
    php artisan key:generate
    ```

5. Ejecuta las migraciones de la base de datos:

    ```bash
    php artisan migrate
    ```

6. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

## Uso

1. Accede a la aplicación en `http://localhost:8000`.
2. Crea, edita y elimina tareas de manera intuitiva.
3. Gestiona las categorías de las tareas para organizar mejor tu lista.

## Captura de Pantalla

![Lista de Tareas](public/images/Captura readme.png)
## Contribuciones

Las contribuciones son bienvenidas. Si encuentras algún problema o tienes una sugerencia de mejora, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está bajo la licencia MIT.




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

