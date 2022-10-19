<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Panduan Penulisan Mahasiswa</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"><a class="text-white" href="/pages/info">Info Jurusan</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Panduan Penulisan Mahasiswa</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="/template/img/plagiarism.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Anti Plagiarisme, Template Karya Ilmiah, Panduan Penulisan dan Panduan Tugas Akhir Mahasiswa D3 dan D4</h5>
                </div>
                <p class="mb-5">Sehubungan dengan kewajiban mahasiswa semester akhir menyusun makalah ilmiah mahasiswa, maka bersama ini kami sampaikan bahwa makalah ilmiah yang akan diserahkan wajib bebas plagiat. Untuk memastikan makalah ilmiah yang diserahkan bebas plagiat maka mahasiswa wajib menggunakan tool anti plagiat. Berikut ini adalah panduan yang dapat digunakan oleh mahasiswa. Batasan plagiat yang diizinkan adalah plagiat rendah berdasarkan hasil pemeriksaan tool yang digunakan. Kumpulkan hasil bukti pemeriksaan tersebut bersamaan dengan makalah ilmiahnya, masukkan dalam cd, dan masukkan dalam lampiran tugas akhir mahasiswa. Peraturan ini berlaku mulai hari ini, Rabu, 16 Agustus 2017. Atas perhatian dan kerjasamanya kami ucapkan terimakasih.</p>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/file/d/0B7XuNtmXW1qSQ212ZmRHNlhoMms/view?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Panduan Plagiarisme</a>
                </div>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/file/d/0B7XuNtmXW1qSYlVxZF9SZjY1REU/view?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Format makalah ilmiah</a>
                </div>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/file/d/0B7XuNtmXW1qSYlVxZF9SZjY1REU/view?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Panduan penulisan karya ilmiah Politeknik Negeri Lampung</a>
                </div>
                <div class="text-left mb-4">
                    <a href="https://drive.google.com/file/d/1hjhW2-kUgt2fuLYODBbaSwuIiduS5BbT/view?usp=sharing" class="text-primary text-uppercase" style="letter-spacing: 5px;" target="_blank">Panduan Tugas Akhir Mahasiswa 2020</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>