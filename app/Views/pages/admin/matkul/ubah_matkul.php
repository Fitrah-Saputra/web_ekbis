<?= $this->extend('template/layout_admin'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Daftar Matakuliah</h5>
        </div>
        <div class="card-body">
            <form action="/admin/updateMatkul/<?= $matkul["id_matkul"]; ?>" method="POST">
                <input type="hidden" name="id_matkul" id="id_matkul" value="">
                <div class="mb-3 row">
                    <label for="kode_matkul" class="col-sm-2 col-form-label">Kode Matakuliah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode_matkul" required name="kode_matkul" value="<?= $matkul["kode_matkul"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mata_kuliah" class="col-sm-2 col-form-label">Matakuliah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="mata_kuliah" required name="mata_kuliah" value="<?= $matkul["mata_kuliah"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sks" required name="sks" value="<?= $matkul["sks"]; ?>">
                    </div>
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