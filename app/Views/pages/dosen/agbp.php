<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Agribisnis Pangan (D4)</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"><a class="text-white" href="/pages/prodi/1">Agribisnis Pangan (D4)</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Profil Dosen Agribisnis Pangan (D4)</p>
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
                    <h1 class="mb-5">Profil Dosen Agribisnis Pangan (D4)</h1>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Golongan</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($detail as $data) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $no++; ?>.</th>
                                <td><?= $data->nama_dosen; ?></td>
                                <td><?= $data->nip; ?></td>
                                <td><?= $data->golongan; ?></td>
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