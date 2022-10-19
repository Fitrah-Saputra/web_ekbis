<?= $this->extend('template/layout_admin'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Daftar Dosen</h5>
        </div>
        <div class="card-body">
            <form action="/admin/updateDosen/<?= $dosen["id_dosen"]; ?>" method="POST">
                <input type="hidden" name="id_dosen" id="id_dosen" value="">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" required name="nama_dosen" value="<?= $dosen["nama_dosen"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nip" required name="nip" value="<?= $dosen["nip"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="golongan" class="col-sm-2 col-form-label mr-2" style="margin-right: 13px !important;">Golongan</label>
                    <select class="form-select col-sm-10" aria-label="Default select example" style="width: 81%;" name="golongan">
                        <option selected><?= $dosen["golongan"]; ?></option>
                        <option value="IIIb">IIIb</option>
                        <option value="IIIc">IIIc</option>
                        <option value="IIId">IIId</option>
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