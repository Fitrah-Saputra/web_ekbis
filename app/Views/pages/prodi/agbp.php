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
                <p class="m-0 text-uppercase">Agribisnis Pangan (D4)</p>
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
                    <h1 class="mb-5">Profil Agribisnis Pangan (D4)</h1>
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visi</h5>
                </div>
                <p class="">Menjadi Program Studi yang bermutu, inovatif, dan unggul dalam bidang Ipteks Terapan bidang agribisnis pangan LULUSAN YANG KOMPETEN:</p>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Profesional dalam penguasaan KKNI agribisnis pangan.</li>
                    <li class="list-group-item">IP > 3,00.</li>
                    <li class="list-group-item">Menguasai IT (Information Technology).</li>
                    <li class="list-group-item">Skor TOEFL ≥ 450.</li>
                    <li class="list-group-item">Waktu tunggu mendapat pekerjaan < 6bln.</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Misi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menyelenggarakan pendidikan tinggi vokasi bidang agribisnis pangan yang berkarakter dan berdaya saing.</li>
                    <li class="list-group-item">Melaksanakan penelitian bidang agribisnis pangan untuk mendukung pendidikan dan transfer IPTEKS.</li>
                    <li class="list-group-item">Melaksanakan PKM guna mendorong, memotivasi, serta membantu meningkatkan perbaikan kehidupan masyarakat.</li>
                    <li class="list-group-item">Menjalin kerja sama secara berkelanjutan dengan stakeholders.</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sasaran Program Studi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Manager Perusahaan Pertanian/ Agribisnis Pangan (manajer produksi, pemasaran, manajer keuangan, dan manajer sumber daya manusia).</li>
                    <li class="list-group-item">Pengusaha Agribisnis pangan (Edible Plant Agribusiness entrepreneur).</li>
                    <li class="list-group-item">Perencana Pembangunan Pertanian/Agribisnis Pangan.</li>
                    <li class="list-group-item">Pemberdaya masyarakat Pertanian bagian Agribisnis pangan.</li>
                </ol>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/dosen/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Dosen Agribisnis Pangan</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/matkul/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Matakuliah Agribisnis Pangan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>