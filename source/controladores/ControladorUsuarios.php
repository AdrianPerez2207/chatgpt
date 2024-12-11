<?php

    namespace API_CHATGPT\controladores;

    use API_CHATGPT\modelos\ModeloUsuarios;
    use API_CHATGPT\vistas\VistaLogin;

    class ControladorUsuarios
    {

        public static function mostrarLogin($error){
            VistaLogin::render($error);
        }

        public static function login($email, $password){
            $usuario = ModeloUsuarios::getEmail($email);
            if ($usuario->getEmail() == $email && $usuario->getPassword() == $password){
                //Guardamos el email y el nomre del usuario en la sesión
                $_SESSION["usuario"] = ["email"=>$usuario->getEmail(), "nombre"=>$usuario->getNombre()];
                //Redireccionamos al usuario
                header("Location: index.php?accion=verPortal");
            } else{
                //Si la contraseña es incorrecta, muestra un mensaje de error
                self::mostrarLogin("Error Login");
            }
        }
    }
