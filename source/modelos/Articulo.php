<?php

    namespace API_CHATGPT\modelos;

    class Articulo
    {

        private $id;
        private $titulo;
        private $contenido;
        private $imagen;
        private $nombre_usuario;

        /**
         * @param $id
         * @param $titulo
         * @param $contenido
         * @param $imagen
         * @param $nombre_usuario
         */
        public function __construct($id, $titulo, $contenido, $imagen, $nombre_usuario)
        {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->contenido = $contenido;
            $this->imagen = $imagen;
            $this->nombre_usuario = $nombre_usuario;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTitulo()
        {
            return $this->titulo;
        }

        /**
         * @param mixed $titulo
         */
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        /**
         * @return mixed
         */
        public function getContenido()
        {
            return $this->contenido;
        }

        /**
         * @param mixed $contenido
         */
        public function setContenido($contenido)
        {
            $this->contenido = $contenido;
        }

        /**
         * @return mixed
         */
        public function getImagen()
        {
            return $this->imagen;
        }

        /**
         * @param mixed $imagen
         */
        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }

        /**
         * @return mixed
         */
        public function getNombreUsuario()
        {
            return $this->nombre_usuario;
        }

        /**
         * @param mixed $nombre_usuario
         */
        public function setNombreUsuario($nombre_usuario)
        {
            $this->nombre_usuario = $nombre_usuario;
        }




    }
