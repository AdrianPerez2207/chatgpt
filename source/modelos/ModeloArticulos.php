<?php

    namespace API_CHATGPT\modelos;

    use Coworking\modelos\ConexionBD;

    class ModeloArticulos{

        public static function guardarArticulo($titulo, $contenido, $imagen){
            //Obtenemos la conexion
            $conexion = new ConexionBD();
            //Consulta MongoDB
            $conexion->getConexion()->articulos->insertOne(['titulo' => $titulo, 'contenido' => $contenido, 'imagen' => $imagen,
                                                            'nombre_usuario' => $_SESSION['usuario']['nombre']]);
            //Cerrar la conexion
            $conexion->cerrarSesion();
        }

        public static function getArticulos(){
            //Obtenemos la conexion
            $conexion = new ConexionBD();
            //Consulta MongoDB
            $articulosJson = $conexion->getConexion()->articulos->find();

            $articulos = array();
            foreach ($articulosJson as $articulo){
                $articulos[] = new Articulo($articulo['_id'], $articulo['titulo'], $articulo['contenido'],
                    $articulo['imagen'], $articulo['nombre_usuario']);
            }
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $articulos;
        }
    }
