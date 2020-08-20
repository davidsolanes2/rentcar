Proyecto base con el framework de Laravel

Esta construido con Ngix + Php + PostgreSql en un contenedor Docker

Requisitos:
===========

1.- El usuario debe tener instalado docker en su maquina local

2.- Una vez que el usuario se lo instala en el directorio de proyecto debera de ejecutar
    "composer install"

3.- Realizar php artisan migrate para pasar las entidades a la BD,con el proyecto arrancado
    pero antes (hasta que no lo arregle) en el archivo .env el DB_HOST se tiene que cambiar
    a 127.0.0.1 y volverlo a dejar tal y como estaba.

4.- Para arrancar el usuario, en el directorio del proyecto debera de ejecutar
    "docker-compose up"

5.- Una vez parado el proyecto, el usuario debera de ejecutar "docker-compose down"
