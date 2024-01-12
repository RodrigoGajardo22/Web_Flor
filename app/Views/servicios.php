<?= $this->extend('plantilla') ?>

<?= $this->section('migajas') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="resumen-servicios bg-light py-5">
    <div class="container">

        <!-- Para Clientes Individuales -->
        <section class="resumen-servicios bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5">Servicios</h2>

                <!-- Para Clientes Individuales -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h3>Diseño de Interiores Personalizado</h3>
                        <p>Creación de diseños exclusivos que reflejen tu estilo y preferencias personales. Trabajamos
                            contigo para transformar tus espacios en hogares únicos y acogedores.</p>
                        <!-- Agrega más detalles si es necesario -->
                    </div>

                    <div class="col-md-6 mb-4">
                        <h3>Remodelaciones y Renovaciones</h3>
                        <p>Servicios de remodelación para actualizar y mejorar tus espacios existentes. Desde pequeñas
                            renovaciones hasta proyectos más extensos, estamos aquí para hacer realidad tus ideas.</p>
                        <!-- Agrega más detalles si es necesario -->
                    </div>

                    <div class="col-md-6 mb-4">
                        <h3>Asesoramiento en Elección de Materiales</h3>
                        <p>Te ayudamos a seleccionar los materiales adecuados para tus proyectos, considerando la
                            estética, funcionalidad y durabilidad. Garantizamos opciones de alta calidad que se adapten
                            a tu estilo de vida.</p>
                        <!-- Agrega más detalles si es necesario -->
                    </div>

                    <div class="col-md-6 mb-4">
                        <h3>Diseño de Muebles a Medida</h3>
                        <p>Creación de muebles personalizados que se ajusten a tus necesidades y espacio. Desde sofás y
                            mesas hasta soluciones de almacenamiento, diseñamos muebles únicos que complementan tu
                            estilo.</p>
                        <!-- Agrega más detalles si es necesario -->
                    </div>
                </div>
            </div>
        </section>


        <!-- Para Arquitectos e Ingenieros -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3>Renderizaciones 3D Profesionales</h3>
                <p>Creación de representaciones visuales realistas para proyectos arquitectónicos.</p>
                <!-- Agrega más detalles si es necesario -->
            </div>

            <div class="col-md-6 mb-4">
                <h3>Apoyo en Visualización Arquitectónica</h3>
                <p>Colaboración para mejorar la presentación visual de proyectos arquitectónicos.</p>
                <!-- Agrega más detalles si es necesario -->
            </div>

            <!-- Agrega más servicios para arquitectos e ingenieros -->
        </div>
    </div>
</section>




<?= $this->endSection() ?>