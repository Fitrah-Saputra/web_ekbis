<?= $this->extend('template/layout_admin'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Daftar Program Studi</h5>
        </div>
        <div class="card-body">
            <form action="/admin/update/<?= $prodi["id_prodi"]; ?>" method="POST">
                <input type="hidden" name="id_prodi" id="id_prodi" value="">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" required name="nama_prodi" value="<?= $prodi["nama_prodi"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tingkat" class="col-sm-2 col-form-label mr-2" style="margin-right: 13px !important;">Tingkat</label>
                    <select class="form-select col-sm-10" aria-label="Default select example" style="width: 81%;" name="tingkat">
                        <option selected><?= $prodi["tingkat"]; ?></option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <a href="/admin" class="btn btn-secondary mr-2">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?= $this->endSection('content'); ?>