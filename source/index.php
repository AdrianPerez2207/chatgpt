<?php
    namespace API_CHATGPT;

    use API_CHATGPT\controladores\ControladorAdmin;
    use API_CHATGPT\controladores\ControladorArticulos;
    use API_CHATGPT\controladores\ControladorUsuarios;

    session_start();

    /**
    * AUTOLOAD
    */
    spl_autoload_register(function ($class) {
    //echo $class."<br>";
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class,"\\")+1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
    });

    //Tratamiento de botones, links
    if (isset($_REQUEST["accion"])) {
        //Vista de login
        if ($_REQUEST["accion"] == "login") {
            ControladorUsuarios::mostrarLogin("");
        }
        //Vista blog
        if ($_REQUEST["accion"] == "verBlog") {
            ControladorBlog::mostrarBlog("");
        }
        //Vista Portal
        if ($_REQUEST["accion"] == "verPortal"){
            ControladorAdmin::mostrarPortal("");
        }
        //Cerrar sesión
        if ($_REQUEST["accion"] == "cerrarSesion") {
            session_destroy();
            header("Location: index.php?accion=login");
        }
    }else if ($_POST != null) {
        //Login
        if (isset($_POST["login"])) {
            ControladorUsuarios::login($_POST["email"], $_POST["password"]);
        }
        if (isset($_POST["titulo"], $_POST["contenido"], $_POST["imagen"])) {
            ControladorArticulos::guardarArticulo($_POST["titulo"], $_POST["contenido"], $_POST["imagen"]);
        }
    } else {
        //Página de inicio
        if (isset($_SESSION["usuario"])) {
            //Página de la app
            ControladorAdmin::mostrarPortal("");

        } else {
            //Formulario de login
            ControladorUsuarios::mostrarLogin("");
        }
    }