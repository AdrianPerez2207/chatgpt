<?php

    namespace API_CHATGPT\vistas;

    class VistaBlog{

        public static function renderBlog($articulos){

            include("cabecera.php");
?>
            <main class="p-3">
                <?php
                foreach ($articulos as $articulo){
                        echo "
                        <div class='d-flex justify-content-center align-items-center flex-column w-75 m-auto'>
                            <div class='text-center'>
                                <h2>{$articulo->getTitulo()}</h2>
                                <hr class='w-75 m-auto'>
                                <p class='text-start mt-3'>{$articulo->getContenido()}</p>
                            </div>
                            <div class='d-flex justify-content-center align-items-center mt-3'>
                                <img src='{$articulo->getImagen()}' id='imagen' width='500' height='400'>
                            </div>
                            <div class='mt-3 w-100'>
                                <p class='text-start fw-bold'>{$articulo->getNombreUsuario()}</p>
                            </div>
                        </div>
                        <hr>
                    ";
                }
                echo "</main>";
            include('pie.php');
        }

    }