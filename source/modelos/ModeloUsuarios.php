<?php
    namespace API_CHATGPT\modelos;
    use Coworking\modelos\ConexionBD;

    class ModeloUsuarios{

        public static function getEmail($email){
            //Obtenemos la conexion
            $conexion = new ConexionBD();
            //Consulta MongoDB
            $usuarioJson = $conexion->getConexion()->usuarios->findOne(['email' => $email]);
            $usuario = new Usuario($usuarioJson->_id, $usuarioJson->nombre, $usuarioJson->apellidos, $usuarioJson->email,
            $usuarioJson->password);
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $usuario;
        }

    }
