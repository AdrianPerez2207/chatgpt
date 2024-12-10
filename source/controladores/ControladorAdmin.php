<?php
    namespace API_CHATGPT\controladores;

    use API_CHATGPT\vistas\VistaAdmin;

    class ControladorAdmin
    {

        public static function mostrarPortal($error)
        {
            VistaAdmin::render($error);
        }

    }
