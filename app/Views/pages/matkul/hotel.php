<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Pengelolaan Perhotelan (D4)</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"><a class="text-white" href="/pages/prodi/9">Pengelolaan Perhotelan (D4)</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Profil Matakuliah Pengelolaan Perhotelan (D4)</p>
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
                    <h1 class="mb-5">Profil Matakuliah Pengelolaan Perhotelan (D4)</h1>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kode Matkul</th>
                            <th scope="col">Matakuliah</th>
                            <th scope="col">SKS</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($detail as $data) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $no++; ?>.</th>
                                <td><?= $data["kode_matkul"]; ?></td>
                                <td><?= $data["mata_kuliah"]; ?></td>
                                <td><?= $data["sks"]; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>