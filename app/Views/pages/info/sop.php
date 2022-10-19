<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">SOP Jurusan</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"><a class="text-white" href="/pages/info">Info Jurusan</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">SOP Jurusan</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg md">
                <div class="text-left mb-4">
                    <h1 class="mb-3">SOP Jurusan</h5>
                </div>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/drive/folders/1zRSleoWkR1WC0GdGL2jhKYaEwAHqzqru?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">SOP Jurusan </a>
                </div>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/drive/folders/1_de-LoY7H5UjPULwzHatY8PDC4-j4whO?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">SOP BAAK PSI</a>
                </div>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/file/d/1aJqgxwUk3FHraA8ehOVdvGNLe3uCF61H/view?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Sertifikat ISO</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?= $this->endSection('content'); ?>