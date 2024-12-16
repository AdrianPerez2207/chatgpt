<?php

    namespace API_CHATGPT\vistas;

    class VistaAdmin  {

        public static function render($error)
        {

            include("cabecera.php");

?>
            <main class="p-3">
            <?php
            //Si algo falla, muestra un mensaje de error
            if (strlen($error) > 0) {
                echo "<p class='text-danger'>{$error}</p>";
            }
            ?>
                <h1 class="h3 mb-3 fw-normal text-center">Generar artículo</h1>
                <div class="w-25 p-5 mb-5 bg-light rounded-3 m-auto d-grid gap-3" method="post">
                    <div class="form-floating">
                        <input name="titulo" type="text" class="form-control" id="titulo">
                        <label for="floatingInput">Título del artículo</label>
                    </div>
                    <div class="form-floating">
                        <input name="key" type="text" class="form-control" id="key">
                        <label for="floatingInput">API KEY</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2" name="generar" id="generar">Generar</button>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <h2 id="tituloCabecera"></h2>
                        <p id="articulo" class="text-start mt-3"></p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-3">
                        <img src="" id="imagen">
                    </div>
                    <button id="guardar" class="btn btn-primary m-auto py-2 mt-3">Guardar</button>
                </div>
            </main>
            <script src="./vistas/script.js"></script>

<?php
        include('pie.php');
    }
}
