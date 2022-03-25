<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instrucciones para utilizar este repositorio

### 1- Clonar o descargar el código mediante.

https
```
git clone https://github.com/TheMustacheCode/laravel-livewire.git
```
ssh
```
git clone git@github.com:TheMustacheCode/laravel-livewire.git
```

### 2- Ingresar al directorio laravel-livewire.

```
cd laravel-livewire/
```

### 3- Archivo de configuración .env y base de datos.
Mediante el siguiente comando creamos un archivo .env con el contenido del archivo .env.example
```
cp .env.example .env
```
Y cambiamos la conexión de base de datos para utilizar sqlite

```
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=livewire_serie
# DB_USERNAME=root
# DB_PASSWORD=
```

Creamos el archivo para la base de datos
```
touch database/database.sqlite

```

### 4- Instalación de dependencias de php con composer.
```
composer install

```
Y luego... 
```
php artisan key:generate
```

### 5- Creación de las tablas y migraciones.
```
php artisan migrate --seed
```

### 6- Instalacion de dependencias JS mediante npm.
```
npm install && npm run dev
```

### 7- Inicio del servidor.
```
php artisan serve
```

## Nota:
Cada vez que descargues una actualización de este código deberás revisar si hay cambios en la base de datos y seeders para poblar ejemplos, te recomiendo que reinicies la base de datos y ejecutes las migraciones con el siguiente comando, esto borrara la base de datos que tienes actualmente y creará una nueva, poblandola con los seeders.

```
php artisan migrate:fresh --seed
```