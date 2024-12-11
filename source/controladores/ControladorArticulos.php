<?php

    namespace API_CHATGPT\controladores;

    use API_CHATGPT\modelos\ModeloArticulos;

    class ControladorArticulos
    {
        public static function guardarArticulo($titulo, $contenido, $imagen){
            ModeloArticulos::guardarArticulo($titulo, $contenido, $imagen);
        }

    }
