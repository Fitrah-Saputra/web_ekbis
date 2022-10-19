<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Tupoksi</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Tupoksi</p>
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
                    <h1 class="mb-5">Tupoksi (Tugas Pokok dan Fungsi Jurusan)</h1>
                </div>
                <p class="text-primary">Tugas-tugas pokok Jurusan antara lain adalah:</p>
                <ol class=" list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menyelenggarakan pendidikan dan pengajaran dalam sebagian atau satu cabang ilmu bagi program pendidikan yang ada sesuai dengan peraturan perundang-undangan.</li>
                    <li class="list-group-item">Menghimpun dan menyusun rencana dan program kerja jurusan.</li>
                    <li class="list-group-item">Menghimpun dan menelaah peraturan perundang-undangan di bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                    <li class="list-group-item">Melakukan pengembangan pendidikan profesional sesuai dengan perundang-undangan yang berlaku.</li>
                    <li class="list-group-item">Melakukan penelitian terapan sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                    <li class="list-group-item">Melakukan pengabdian kepada masyarakat sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                    <li class="list-group-item">Melakukan pembinaan civitas akademika sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                    <li class="list-group-item">Melakukan kegiatan kerja sama di bidang pendidikan, penelitian, dan pengabdian kepada masyarakat dengan pihak/instansi lain.</li>
                    <li class="list-group-item">Menyusun laporan tahunan jurusan.</li>
                </ol>
                <p class="text-primary mt-5">Jurusan Ekbis dalam melaksanakan tugas-tugas pokok tersebut memiliki fungsi sebagai:</p>
                <ol class=" list-group list-group-numbered mb-4">
                    <li class="list-group-item">Pelaksana administrasi penyelenggaraan pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                    <li class="list-group-item">Pelaksana administrasi kepegawaian (bagi tenaga dosen dan fungsional lainnya).</li>
                    <li class="list-group-item">Pelaksana administrasi ketatalaksanaan dan rumah tangga jurusan.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>