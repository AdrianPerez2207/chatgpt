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
                <h1 class="h3 mb-3 fw-normal">Generar artículo</h1>
                <form class="w-25 p-5 mb-5 bg-light rounded-3 m-auto d-grid gap-3" action="index.php" method="post">
                    <div class="form-floating">
                        <input name="titulo" type="text" class="form-control" id="floatingInput">
                        <label for="floatingInput">Título del artículo</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit" name="generar">Generar</button>
                </form>
            </main>

<?php
        include('pie.php');
    }
}
