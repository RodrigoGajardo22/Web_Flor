<?= $this->extend('plantilla') ?>

<?= $this->section('migajas') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <!-- Agrega las diapositivas del carrusel aquí -->
    <section id="container-slider">
        <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
        <ul class="listslider">
            <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
            <li><a itlist="itList_1" href="#"></a></li>
            <li><a itlist="itList_2" href="#"></a></li>
        </ul>
        <ul id="slider">
            <li style="background-image: url(<?= base_url("nuestrasImg/cocina2.jpg") ?>); z-index:0; opacity: 1;">
                <div class="content_slider">
                    <div>
                        <h2>Emprendimiento empresarial</h2>
                        <p>Descubra en qué consiste el emprendimiento empresarial por medio de 5 estrategias
                            fundamentales.</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
            <li style="background-image: url(<?= base_url("nuestrasImg/cocina3.jpg") ?>); ">
                <div class="content_slider">
                    <div>
                        <h2>Negocios</h2>
                        <p>Recursos, guías, herramientas y consejos para emprender, crear tu empresa o iniciar un
                            negocio exitoso</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
            <li style="background-image: url(<?= base_url("nuestrasImg/baño1.jpg") ?>); ">
                <div class="content_slider">
                    <div>
                        <h2>Estrategias de negocio</h2>
                        <p>Las estrategias de negocio representan planes o métodos...</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</div>

<!-- Tira de Resumen de Servicios -->
<section class="resumen-servicios">
    <div class="container">
        <h2 class="text-center mb-5 text-white">Servicios</h2>

        <div class="row">
            <!-- Servicios para Clientes Residenciales -->
            <div class="col-lg-6">
                <h3 class="mb-4">Clientes Residenciales</h3>
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-home fa-3x mb-3"></i>
                        <h4 class="card-title">Diseño de Interiores</h4>
                        <p class="card-text">Transformamos tu hogar, desde el diseño hasta la elección de materiales.
                        </p>
                    </div>
                </div>
                <!-- Agrega más bloques para otros servicios residenciales -->
            </div>

            <!-- Servicios para Arquitectos e Ingenieros -->
            <div class="col-lg-6">
                <h3 class="mb-4">Arquitectos e Ingenieros</h3>
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-cogs fa-3x mb-3"></i>
                        <h4 class="card-title">Renders y Visualizaciones</h4>
                        <p class="card-text">Asistencia con renders y visualizaciones para proyectos arquitectónicos.
                        </p>
                    </div>
                </div>
                <!-- Agrega más bloques para otros servicios para profesionales -->
            </div>
        </div>
    </div>
</section>



<!-- Tira de Resumen de Trabajos Realizados -->
<section class="resumen-trabajos bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Trabajos Realizados</h2>

        <div class="row">
            <!-- Proyecto 1 -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="<?= base_url("nuestrasImg/1.jpg") ?>" class="card-img-top" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Proyecto 1</h5>
                        <p class="card-text">Breve descripción del proyecto y servicios realizados.</p>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="<?= base_url("nuestrasImg/2.jpg") ?>" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Proyecto 2</h5>
                        <p class="card-text">Breve descripción del proyecto y servicios realizados.</p>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="<?= base_url("nuestrasImg/5.jpg") ?>" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Proyecto 3</h5>
                        <p class="card-text">Breve descripción del proyecto y servicios realizados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Tira de Resumen sobre Quién Eres -->
<section class="resumen-quien-eres py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-white">¿Quién Soy?</h2>

        <div class="row">
            <!-- Información personal y biografía -->
            <div class="col-lg-6 text-center mb-4">
                <img src="<?= base_url("nuestrasImg/flor.jpg") ?>" alt="Tu Imagen"
                    style="width: 100%; max-width: 300px; height: auto;" class="img-fluid rounded-circle mb-4">
                <p class="text-muted">Tu biografía o una breve descripción sobre quién eres y tu experiencia en diseño
                    de interiores y renders.</p>
            </div>

            <!-- Habilidades y Experiencia -->
            <div class="col-lg-6">
                <h3>Habilidades</h3>
                <ul class="list-unstyled">
                    <li>Diseño de Interiores</li>
                    <li>Renderización 3D</li>
                    <li>Asesoramiento en Selección de Materiales</li>
                    <!-- Agrega más habilidades según sea necesario -->
                </ul>

                <h3>Experiencia</h3>
                <p>Describe tu experiencia laboral y proyectos destacados en el campo del diseño de interiores y
                    renders.</p>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>