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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalAdd">
                <i class="fa fa-plus mr-1"></i>
                Tambah
            </button>
            <div class="table-responsive">
                <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Prodi</th>
                            <th>Tingkat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($prodi as $data) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $no++; ?>.</th>
                                <td><?= $data["nama_prodi"]; ?></td>
                                <td><?= $data["tingkat"]; ?></td>
                                <td>
                                    <a href="/admin/delete/<?= $data["id_prodi"]; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Anda yakin ingin menghapus ini ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="/admin/edit/<?= $data["id_prodi"]; ?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Program Studi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/save" method="POST">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" required name="nama_prodi">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tingkat" class="col-sm-2 col-form-label mr-2" style="margin-right: 13px !important;">Tingkat</label>
                            <select class="form-select col-sm-10" aria-label="Default select example" style="width: 78%;" name="tingkat">
                                <option selected>Pilih</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection('content'); ?>