<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Agribisnis (D3)</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Agribisnis (D3)</p>
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
                    <h1 class="mb-5">Profil Agribisnis (D3)</h1>
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visi</h5>
                </div>
                <p class=""><i>“Tahun 2020 Menjadi Program Studi Vokasi Bidang Agribisnis Yang Unggul Di Indonesia”</i><br><br>Unggul mengandung arti PS Agribisnis melakukan kegiatan akademik dan non akademik sesuai dengan standar Nasional Pendidikan dan mencapai nilai akreditasi A dari BAN-PT (Badan Akreditasi Perguruan Tinggi).</p>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Misi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menyelenggarakan pendidikan vokasi yang berorientasi kepadaintegritas, kejujuran, terampil, disiplin, mandiri dan profesional.</li>
                    <li class="list-group-item">Melaksanakan penelitian terapandan pengabdian masyarakat dalam bidang agribisnis guna meningkatkan kualitas sumberdaya manusia dan perbaikan kehidupan sosial ekonomi masyarakat.</li>
                    <li class="list-group-item">Membentuk peserta didik menjadi masyarakat yang produktif, kreatif, dan profesional,serta berorientasi wirausaha untuk menciptakan lapangan pekerjaan.</li>
                    <li class="list-group-item">Membuka, mengembangkan dan memperkuat kerjasama dengan instansi pemerintah, perusahaan agribisnis dan masyarakat pertanian.</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tujuan Program Studi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menghasilkan lulusan yang memiliki kompetensidibidang agribisnis dan berjiwa wirausaha serta berintegritas yang mampu bersaing secara nasional dan global.</li>
                    <li class="list-group-item">Menghasilkan teknologi tepat guna berupa rekayasa sosial di bidang agribisnis untuk meningkatkan pengetahuan dan kesejahteraan masyarakat melalui penelitian.</li>
                    <li class="list-group-item">Menghasilkan kegiatan pengabdian kepada masyarakat di bidang agribisnis yang meningkatkan perbaikan kehidupan sosial ekonomi.</li>
                    <li class="list-group-item">Menghasilkan kerjasama yang saling menguntungkan dan berkualitasdengan stake holder di bidang agribisnis.</li>
                    <li class="list-group-item">Menjadikan Program Studi Agribisnis sebagai program studi penyelenggara pendidikan vokasi yang efektif, efisien, dan produktif..</li>
                </ol>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/dosen/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Dosen Agribisnis</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/matku/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Matakuliah Agribisnis</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>