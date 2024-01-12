<?= $this->extend('plantilla') ?>

<?= $this->section('migajas') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="row proyectoCarousel">
    <!-- Carrusel -->
    <div class="col-md-6">
        <div id="proyectoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url("nuestrasImg/2.jpg") ?>" class="d-block w-100" alt="Proyecto 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("nuestrasImg/3.jpg") ?>" class="d-block w-100" alt="Proyecto 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("nuestrasImg/4.jpg") ?>" class="d-block w-100" alt="Proyecto 3">
                </div>
                <!-- Agrega más imágenes según sea necesario -->
            </div>
            <a class="carousel-control-prev" href="#proyectoCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#proyectoCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
        </div>
    </div>

    <!-- Descripción del Proyecto -->
    <div class="col-md-6">
        <div class="descripcion-proyecto">
            <h3>Nombre del Proyecto 1</h3>
            <p>Una breve descripción del proyecto y sus características. Puedes agregar más detalles aquí.</p>
        </div>
    </div>
</div>

<div class="row proyectoCarousel">
    <!-- Carrusel -->
    <div class="col-md-6">
        <div id="proyectoCarousel2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url("nuestrasImg/5.jpg") ?>" class="d-block w-100" alt="Proyecto 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("nuestrasImg/baño1.jpg") ?>" class="d-block w-100" alt="Proyecto 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("nuestrasImg/cocina1.jpg") ?>" class="d-block w-100" alt="Proyecto 3">
                </div>
                <!-- Agrega más imágenes según sea necesario -->
            </div>
            <a class="carousel-control-prev" href="#proyectoCarousel2" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#proyectoCarousel2" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
        </div>
    </div>

    <!-- Descripción del Proyecto -->
    <div class="col-md-6">
        <div class="descripcion-proyecto">
            <h3>Nombre del Proyecto 2</h3>
            <p>Una breve descripción del proyecto y sus características. Puedes agregar más detalles aquí.</p>
        </div>
    </div>
</div>



<?= $this->endSection() ?>