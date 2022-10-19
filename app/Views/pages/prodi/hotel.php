<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Pengelolaan Perhotelan (D4)</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Pengelolaan Perhotelan (D4)</p>
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
                    <h1 class="mb-5">Profil Pengelolaan Perhotelan (D4)</h1>
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visi</h5>
                </div>
                <p class="mb-5">Menjadi program studi unggulan penghasil sumber daya manusia yang unggul, terampil, cekatan, dan berdaya saing tinggi dalam industri perhotelan yang berskala nasional dan internasional.</p>
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Misi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menyelenggarakan pendidikan dan pelatihan sesuai dengan kurikulum yang memiliki basis kompetensi pada industri perhotelan.</li>
                    <li class="list-group-item">Melibatkan sektor industri perhotelan terkait dalam proses pengajaran praktik.</li>
                    <li class="list-group-item">Menyediakan sarana laboratorium dalam kampus untuk menunjang praktikum mahasiswa.</li>
                    <li class="list-group-item">Menjalin kerjasama dengan asosiasi profesi dan pemangku kepentingan dalam sektor perhotelan baik di dalam negeri atau diluar negeri.</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tujuan Program Studi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Menghasilkan lulusan yang mampu bekerja pada level pekerjaan managerial (middle dan top manager) yang berjiwa kepemimpinan.</li>
                    <li class="list-group-item">Menghasilkan lulusan yang memiliki kemampuan tinggi dalam analisis peluang bisnis.</li>
                    <li class="list-group-item">Menghasilkan lulusan yang mampu merencanakan, mengelola, memecahkan masalah, dan menerapkan iptek untuk melaksanakan pekerjaan manajerial dibidang perhotelan.</li>
                    <li class="list-group-item">Menghasilkan lulusan yang mampu melakukan penelitian terapan dan mampu menganalisis suatu percobaan dibidang perhotelan.</li>
                    <li class="list-group-item">Menghasilkan lulusan yang memiliki kemampuan menjadi wirausaha dibidang industri perhotelan (hospitality entrepreneurship).</li>
                    <li class="list-group-item">Menyelenggarakan kerja sama yang bersinergi untuk meningkatkan potensial soft skill dan kompetensi sehingga lulusan siap masuk dunia kerja atau berwirausaha.</li>
                </ol>
                <div class="text-left mt-5 mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sasaran Program Studi</h5>
                </div>
                <ol class="list-group list-group-numbered mb-4">
                    <li class="list-group-item">Terselenggaranya pendidikan vokasi yang mengacu pada kurikulum berpedoman dengan SKKNI berorientasi.</li>
                    <li class="list-group-item">Terselenggaranya pengembangan Iptek terapan dibidang budidaya dan pengelolaan kopi melalui penelitian dan pengabdian kepada masyarakat.</li>
                    <li class="list-group-item">Terselenggaranya pendidikan belajar mengajar (PMB) berbasis uji kompetensi yang bersertifikasi.</li>
                    <li class="list-group-item">Terselenggaranya pusat pendidikan vokasi yang menerapkan, mengembangkan pengetahuan, keterampilan pengelolaan perhotelan dan kewirausahaan hospitaliti, yang bersinergi dengan dunia industri perhotelan, dalam rangka menjawab tantangan dan kebutuhan dunia kerja di bidang perhotelan.</li>
                </ol>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/dosen/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Dosen Pengelolaan Perhotelan</a>
                </div>
                <div class="text-left mb-4 mt-5">
                    <a href="/pages/matkul/<?= $id; ?>" class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Matakuliah Pengelolaan Perhotelan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>