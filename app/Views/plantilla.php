<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arquitectura de Interiores</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Roboto:300,400,400i,500,700&display=swap">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url("plugins/fontawesome-free/css/all.min.css") ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("dist/css/adminlte.min.css") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="<?= base_url("dist/css/style.css") ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>

<body>
    <div>

        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand-md navbar-dark bg-dark" style="margin-left: 0;">

            <a class="navbar-brand">
                <img src="<?= base_url('nuestrasImg/logo.jpg') ?>" alt="Logo"
                    class="brand-image img-circle elevation-3 img-fluid" style="opacity: .8; width: 50px;">

                <span class="brand-text font-weight-light">Arquitectura de interiores</span>
            </a>

            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('servicios') ?>">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('proyectos') ?>">PROYECTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contacto') ?>">CONTACTO</a>
                </li>
            </ul>
        </nav>


        <!-- Content Wrapper -->
        <div>
            <div class="content-header">
                <div class="container-fluid">
                    <div>
                        <?= $this->renderSection('migajas') ?>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div>
                <div class="container-fluid">
                    <div>
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <!-- Main Footer -->
        <footer class="bg-dark text-white py-3">
            <div class="container text-center">
                <p class="mb-0">Creado por <a href="#" class="text-white">Rodrigo Gajardo</a></p>
            </div>
        </footer>

        <!-- ./Main Footer -->

        <!-- ./Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="<?= base_url("plugins/jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url("plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("dist/js/adminlte.min.js") ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="<?= base_url("dist/js/functions.js") ?>"></script>
</body>

</html>