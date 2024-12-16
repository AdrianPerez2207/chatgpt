<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog CHATGPT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b30965d9a.js" crossorigin="anonymous"></script>
    <style>
        ul{
            list-style-type: none;
        }
    </style>
</head>
<body class="min-vh-100">
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between ">

            <h1>Blog ChatGPT</h1>
            <div class="dropdown text-end">
                <?php
                    if (isset($_SESSION['usuario'])) {
                        $email = $_SESSION['usuario']['email'];
                        echo("
                            <a href='#' class='d-block link-body-emphasis text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                                <i class='fa-solid fa-user fs-4'></i><span class='ms-2 d-none d-lg-inline-block'>{$email}</span>
                            </a>
                            <ul class='dropdown-menu text-small'>
                                <li><a class='dropdown-item' href='index.php?accion=verPortal'>Generar artículo</a></li>
                                <li><a class='dropdown-item' href='index.php?accion=verBlog'>Blog</a></li>
                                <li><hr class='dropdown-divider'></li>
                                <li><a class='dropdown-item' href='index.php?accion=cerrarSesion'>Cerrar sesión</a></li>
                            </ul>");
                    } else{
                        echo("
                            <a href='#' class='d-block link-body-emphasis text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                                <i class='fa-solid fa-user fs-4'></i>
                            </a>
                            <ul class='dropdown-menu text-small'>
                                <li><a class='dropdown-item' href='index.php?accion=login'>Iniciar sesión</a></li>
                            </ul>");
                    }
                ?>
            </div>
        </div>
    </div>
</header>


