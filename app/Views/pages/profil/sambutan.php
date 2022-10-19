<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Sambutan Ketua Jurusan</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Sambutan Ketua Jurusan</p>
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
                    <h1 class="mb-3">Sambutan Ketua Jurusan</h1>
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Assalamualaikum Warahmatullahi Wabarakatuh.</h5>
                </div>
                <?php foreach ($profil as $data) : ?>
                    <p class="mb-5"><?= $data["sambutan"]; ?></p>
                <?php endforeach; ?>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Sistem pendaftaran Ujian Tugas Akhir Online (SIPUT v1) saat ini juga telah dikembangkan menjadi Sistem Monitoring Tugas Akhir Mahasiswa yang lebih lengkap, mulai dari mahasiswa mengajukan judul tugas akhir, proses pimbimbangan, revisi sampai dengan penerbitan nilai tugas akhir mahasiswa.</li>
                    <li class="list-group-item">Aplikasi Praktik Pengganti berbasis web yang diperuntukkan bagi staf di Jurusan Ekonomi dan Bisnis. Aplikasi ini dapat digunakan untuk menyediakan informasi terkait aktivitas praktik pengganti mahasiswa.</li>
                    <li class="list-group-item">Aplikasi Praktik Pengganti berbasis web yang diperuntukkan bagi staf di Jurusan Ekonomi dan Bisnis. Aplikasi ini dapat digunakan untuk menyediakan informasi terkait aktivitas praktik pengganti mahasiswa.</li>
                    <li class="list-group-item">E-Surat yang digunakan untuk menyimpan arsip masuk dan keluar, disposisi online dan arsip digital.</li>
                    <li class="list-group-item">E-pegawai yang digunakan untuk merekam seluruh kegiatan yang dilakukan oleh pegawai di Jurusan Politeknik Negeri Lampung mulai dari riwayat kepegawaian, pendidikan, keluarga, pangkat, jabatan, penelitian, pendidikan dan penunjang.</li>
                    <li class="list-group-item">E-Saran yang dapat digunakan oleh seluruh civitas akademik Jurusan Ekonomi dan Bisnis dalam memberikan saran dan kritik agar kualitas pelayanan dapat ditingkatkan.</li>
                    <li class="list-group-item">E-print yang dapat digunakan untuk menyebarkan hasil karya ilmiah mahasiswa, sehingga dapat diakses oleh siapun yang membutuhkan sebagai bahan referensi dalam karya ilmiah.</li>
                    <li class="list-group-item">E-kalender yang dapat digunakan untuk melihat informasi terkait dengan kegiatan kalender akademik Politeknik Negeri Lampung.</li>
                    <li class="list-group-item">E-Survey yang digunakan untuk mengukur tingkat kepuasan civitas akademik Jurusan Ekonomi dan Bisnis terhadap pelayanan yang diberikan.</li>
                    <li class="list-group-item">E-Layanan. Dalam rangka meningkatkan kualitas layanan kepada civitas akademika Jurusan Ekonomi dan Bisnis Politeknik Negeri Lampung di era digital, maka mulai 2018 Jurusan Ekonomi dan Bisnis meluncurkan layanan online yang dapat diakses oleh seluruh civitas akademik.</li>
                    <li class="list-group-item">E-PUM yang dapat digunakan untuk pendaftaran seminar proposal dan seminar hasil PUM mahasiswa Jurusan Ekonomi dan Bisnis.</li>
                </ol>
                <p class="mb-5"><?= $data["penutup"]; ?></p>
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Wassalamualaikum Warahmatullahi Wabarakatuh.</h5>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>