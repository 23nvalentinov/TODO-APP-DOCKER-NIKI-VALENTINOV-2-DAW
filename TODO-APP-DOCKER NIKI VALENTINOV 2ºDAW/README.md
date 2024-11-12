# Proyecto Agenda de Tareas

Este es un proyecto de una agenda de tareas desarrollada en PHP, con una base de datos en MySQL y gestionada con phpMyAdmin. Todo el proyecto está dockerizado para facilitar su despliegue.

## Contenedores Docker

- **php-app**: Contenedor que corre el servidor web Apache con PHP utilizando un Dockerfile personalizado.
- **mysql-db**: Contenedor que corre la base de datos MySQL.
- **phpmyadmin**: Contenedor que corre phpMyAdmin para gestionar la base de datos.

## Comandos para iniciar el proyecto

1. Clona este repositorio.
2. Navega hasta la carpeta del proyecto.
3. Ejecuta `docker-compose up -d`o `docker-compose up --build` para iniciar los contenedores.
4. Accede a `http://localhost:8080` para ver la aplicación.
5. Accede a `http://localhost:8081` para gestionar la base de datos con phpMyAdmin.

## Información Adicional

- **Usuario MySQL**: user
- **Contraseña MySQL**: password
- **Base de datos MySQL**: task_db

### Estructura del Proyecto

- **src/**: Carpeta que contiene el código fuente en PHP.
  - `index.php`: Interfaz principal.
  - `tasks.php

## Créditos 

  - **Introducción a Docker** https://www.youtube.com/watch?v=4Dko5W96WHg
  - **Docker y PHP** https://www.youtube.com/watch?v=-XnfBItOBHE
  - **Crear una App con PHP, Docker y Mysql** https://www.youtube.com/watch?v=2Bxh5FNGznQ