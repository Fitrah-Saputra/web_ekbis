<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Akutansi Bisnis Digital (D4)</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Akutansi Bisnis Digital (D4)</p>
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
                    <h1 class="mb-5">Profil Akutansi Bisnis Digital (D4)</h1>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/dosen/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Dosen Akutansi Bisnis Digital</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/matku/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Matakuliah Akutansi Bisnis Digital</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>