<?php

    namespace config;

    use config\Route;

    require_once realpath('./vendor/autoload.php');

    $router = new Route();

    $router->get("/", ['Login', 'index']);
    $router->get("/login", ['Login', 'index']);
    $router->post("/loginComprobar", ['Login', 'comprobarUsuario']);
    /* Registrar usuarios y validar que se creen correctamente */
    $router->get("registre", ['Login', 'registro']);
    $router->post("/registreComprobar", ['Login', 'completarRegistro']);
    $router->get("/logout", ['Login', 'cerrarSession']);
    /* Rutas de interfaz de visualizacion de contenido */
    $router->get("/home", ['Home', 'index']);
    $router->get("/catalogo", ['Home', 'catalogo']);
    $router->get("/noticias", ['Home', 'noticias']);
    $router->get("/consejos", ['Home', 'consejos']);

    $router->run()

?>