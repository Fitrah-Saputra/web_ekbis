<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Pengelolaan Agribisnis (D4)</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Pengelolaan Agribisnis (D4)</p>
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
                    <h1 class="mb-5">Profil Pengelolaan Agribisnis (D4)</h1>
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visi</h5>
                </div>
                <p class=""><i>“Menjadi Program Studi Vokasi Bidang Pengelolaan Agribisnis (Agribusiness Management) yang Terintegrasi, berkarakter kewirausahaan, dan unggul dalam ilmu pengetahuan dan teknologi terapan”</i><br><br>Indikator terintegrasi, berkarakter kewirausahaan, dan unggul dalam ilmu pengetahuan dan teknologi terapan dapat dideskripsikan:</p>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Terintegrasi diartikan sebagai sebuah sistem agribisnis yang diintegrasikan antara praktik produksi tanaman, ikan, dan hewan menggunakan prinsip ekologi dan sosial ekonomi.</li>
                    <li class="list-group-item">Berkarakter kewirausahaan diartikan memiliki ciri khas seorang wirausaha/<i>entrepreneur</i> yaitu jujur, berintegritas, melaksanakan etika bisnis, dan mampu membuat lapangan kerja.</li>
                    <li class="list-group-item">Unggul diartikan mempunyai kemampuan lebih di bidang Pengelolaan Agribisnis (<b><i>Agribusiness Management</i></b>) dan memiliki hasil akreditasi A.</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Misi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Mewujudkan pendidikan vokasi bidang <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>)</b> yang berkelanjutan, berorientasi kepada integritas, kejujuran, terampil, disiplin, dan mandiri.</li>
                    <li class="list-group-item">Mewujudkan penelitian terapan dan pengabdian masyarakat dalam bidang <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>)</b> yang berkelanjutan guna meningkatkan kualitas sumberdaya manusia dan perbaikan kehidupan sosial ekonomi masyarakat.</li>
                    <li class="list-group-item">Membentuk peserta didik menjadi masyarakat ilmiah yang produktif, kritis, kreatif dan inovatif, serta berorientasi wirausaha untuk menciptakan lapangan pekerjaan.</li>
                    <li class="list-group-item">Membuka, mengembangkan, dan memperkuat kerjasama dengan dunia usaha-dunia industri, instansi pemerintah, dan masyarakat pertanian menuju SDG (<i>Sustainable Development Goals</i>).</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tujuan Program Studi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menghasilkan lulusan yang kompeten di bidang <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>)</b> yang terintegrasi, holistik dan memiliki jiwa wirausaha serta berintegritas yang mampu bersaing secara nasional dan global.</li>
                    <li class="list-group-item">Menghasilkan teknologi tepat guna berupa rekayasa sosial di bidang <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>)</b> yang terintegrasi dan holistik untuk meningkatkan pengetahuan dan kesejahteraan masyarakat melalui penelitian terapan.</li>
                    <li class="list-group-item">Menghasilkan kegiatan pengabdian kepada masyarakat di bidang <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>)</b> yang terintegrasi untuk meningkatkan perbaikan kehidupan sosial ekonomi masyarakat.</li>
                    <li class="list-group-item">Menghasilkan kerjasama yang saling menguntungkan dan berkualitas dengan dunia usaha dan dunia industri serta stakeholder di bidang <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>).</b></li>
                    <li class="list-group-item">Menjadikan Program Studi <b>Pengelolaan Agribisnis (<i>Agribusiness Management</i>)</b> sebagai program studi dengan tatakelola pendidikan vokasi yang unggul, efektif dan efisien.</li>
                </ol>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/dosen/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Dosen Pengelolaan Agribisnis<a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/matkul/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Matakuliah Pengelolaan Agribisnis<a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>