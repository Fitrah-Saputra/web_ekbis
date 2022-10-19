<?= $this->extend('template/layout_admin'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Matakuliah Manajemen Informatika</h5>
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
                            <th>Kode Matkul</th>
                            <th>Matakuliah</th>
                            <th>SKS</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($matkul as $data) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $no++; ?>.</th>
                                <td><?= $data["kode_matkul"]; ?></td>
                                <td><?= $data["mata_kuliah"]; ?></td>
                                <td><?= $data["sks"]; ?></td>
                                <td>
                                    <a href="/admin/deleteMatkul/<?= $data["id_matkul"]; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Anda yakin ingin menghapus ini ?')" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="/admin/editMatkul/<?= $data["id_matkul"]; ?>" class="btn btn-warning btn-circle">
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Matakuliah Manajemen Informatika</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/saveMatkul/7" method="POST">
                        <div class="mb-3 row">
                            <label for="kode_matkul" class="col-sm-2 col-form-label">Kode Matakuliah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode_matkul" required name="kode_matkul">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="id_prodi" class="col-sm-2 col-form-label mr-2" style="margin-right: 13px !important;">Nama Prodi</label>
                            <select class="form-select col-sm-10" aria-label="Default select example" style="width: 78%;" name="id_prodi">
                                <option selected>Pilih</option>
                                <option value="1">Agribisnis Pangan</option>
                                <option value="2">Pengelolaan Agribisnis</option>
                                <option value="3">Akutansi Bisnis Digital</option>
                                <option value="4">Agribisnis</option>
                                <option value="5">Akutansi Perpajakan</option>
                                <option value="6">Akutansi</option>
                                <option value="7">Manajemen Informatika</option>
                                <option value="8">Perjalanan Wisata</option>
                                <option value="9">Pengelolaan Perhotelan</option>
                                <option value="10">Administrasi Perpajakan</option>
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <label for="mata_kuliah" class="col-sm-2 col-form-label">Matakuliah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mata_kuliah" required name="mata_kuliah">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sks" required name="sks">
                            </div>
                        </div>
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