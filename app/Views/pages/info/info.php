<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Info Jurusan</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Info Jurusan</p>
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
                    <h1 class="mb-3">Info Jurusan</h1>
                </div>
                <?php foreach ($info as $data) : ?>
                    <p class="mb-5"><?= $data["deskripsi"]; ?></p>
                <?php endforeach; ?>
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visi<h5>
                </div>
                <p class="mb-5"><?= $data["visi"]; ?></p>
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Misi<h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menyelenggarakan pendidikan berbasis kompetensi dan memberdayakan kegiatan penelitian dan pengabdian yang mendukung pengembangan industri/ukm.</li>
                    <li class="list-group-item">Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif.</li>
                    <li class="list-group-item">Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran di bidang agribisnis, akuntansi, perpajakan, informatika dan pariwisata.</li>
                    <li class="list-group-item">Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan di bidang agribisnis, akuntansi, perpajakan, informatika dan pariwisata.</li>
                    <li class="list-group-item">Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika.</li>
                    <li class="list-group-item">Menjalin kerjasama secara berkelanjutan dengan pihak yang berhubungan dengan agribisnis, akuntansi, perpajakan, informatika dan pariwisata.</li>
                </ol>
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Motto<h5>
                </div>
                <?php foreach ($info as $data) : ?>
                    <p class="mb-5"><?= $data["motto"]; ?>.</p>
                <?php endforeach; ?>
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tujuan<h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan, di bidang agribisnis, akuntansi, perpajakan, informatika dan pariwisata.</li>
                    <li class="list-group-item">Mengembangkan pengetahuan terapan bidang teknologi, terapan di bidang agribisnis, akuntansi, perpajakan, informatika dan pariwisata yang memajukan penerapan teknologi di industri dan masyarakat.</li>
                    <li class="list-group-item">Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran di bidang agribisnis, akuntansi, perpajakan, informatika dan pariwisata.</li>
                    <li class="list-group-item">Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat.</li>
                    <li class="list-group-item">Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                    <li class="list-group-item">Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</li>
                </ol>
                <div class="text-left mb-4 mt-5">
                    <a href="https://calendar.google.com/calendar/u/0/embed?src=ekbis@polinela.ac.id&ctz=Asia/Jakarta.&pli=1" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Kalender Akademik</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/anti_plagiat" class="text-primary text-uppercase" style="letter-spacing: 5px;">Panduan Penulisan Mahasiswa</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/sop" class="text-primary text-uppercase" style="letter-spacing: 5px;">SOP Jurusan</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="https://drive.google.com/drive/folders/1FS3jcBVJF_2WOCe_FmZh32yb0LFVLsW8" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Sertifikat Akreditasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>