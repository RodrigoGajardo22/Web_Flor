<?= $this->extend('plantilla') ?>

<?= $this->section('migajas') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>


<!-- Content Wrapper. Contains page content -->
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <h2><strong>Florencia Techeira</strong></h2>
                        <p class="lead mb-5">Viedma, Rio Negro, Argentina<br>
                            Phone: +54 9 2920-611553
                        </p>
                    </div>
                </div>
                <form action="<?= base_url('enviar-email') ?>" method="post">
                    <?= csrf_field() ?>
                    <?php if (!empty(session()->getFlashdata('error'))): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('exito'))): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('exito'); ?>
                        </div>
                    <?php endif ?>




                    <div class="form-row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" name="name" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">E-Mail</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Phone</label>
                                <input type="tel" id="inputSubject" name="telefono" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea id="inputMessage" name="message" class="form-control" rows="4"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Send message">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?= $this->endSection() ?>