<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Sasaran Mutu</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Sasaran Mutu</p>
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
                    <h1 class="mb-3">Sasaran Mutu</h1>
                </div>
                <p class="text-primary mb-5">Sasaran Mutu Jurusan Ekonomi dan Bisnis</p>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kegiatan</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($sasaran as $data) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $no++; ?>.</th>
                                <td><?= $data["kegiatan"]; ?></td>
                                <td><a href="<?= $data["link"]; ?>" target="_blank">Link</a></td>
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