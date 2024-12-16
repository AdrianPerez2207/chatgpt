<?php

    namespace API_CHATGPT\controladores;

    use API_CHATGPT\modelos\ModeloArticulos;
    use API_CHATGPT\vistas\VistaBlog;

    class ControladorArticulos
    {
        public static function guardarArticulo($titulo, $contenido, $imagen){
            ModeloArticulos::guardarArticulo($titulo, $contenido, $imagen);
        }
        public static function mostrarBlog(){
            $articulos = ModeloArticulos::getArticulos();
            VistaBlog::renderBlog($articulos);
        }

    }
