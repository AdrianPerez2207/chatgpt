<?php

    namespace API_CHATGPT\modelos;

    class Articulo
    {

        private $id;
        private $titulo;
        private $descripcion;
        private $imagen;
        private $nombre_usuario;

        /**
         * @param $id
         * @param $titulo
         * @param $descripcion
         * @param $imagen
         * @param $nombre_usuario
         */
        public function __construct($id, $titulo, $descripcion, $imagen, $nombre_usuario)
        {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
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
        public function getDescripcion()
        {
            return $this->descripcion;
        }

        /**
         * @param mixed $descripcion
         */
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
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
