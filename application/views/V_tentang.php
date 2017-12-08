<?php $this->load->view('layouts/Header') ?>
<style media="screen">
    textarea{
        background-color: #FFFFFF !important;
        border-color: #CCCCCC !important;
    }
    .btn-brown{
        background-color: #5D382C;
        border-color: rgb(255, 255, 255);
        color: white;
    }
</style>
<section class="section-head">
    <div class="container">
        <p class="text-center">
            <h3 style="color:white !important;margin-top:40px">Tentang</h3>
        </p>
    </div>
</section>

<div class="container">
    <section class="section-white">
        <div class="center text-center">
            <h2>Tetang DOKTERKU</h2>
            <p>
                DOKTERKU adalah aplikasi web yang dipercayakan oleh pemerintah daerah untuk melakukan konsultasi online. <br>
                Sistem kerja dokterku menguatkan pohon keputusan agar dapat dibangun secara dinamis sehingga dokter hanya perlu memasukan data-data pendukung konsultasi yang dibutuhkan, dan tidak perlu pembaruan kode sama sekali jika ada rule baru.
                Dengan membangun pohon keputusan yang dinamis membuat aplikasi Dokterku lebih solid dan akurat. <br>
                Dokter spesialis masing-masing yang dipercayakan pemerintah untuk mengisi konten pada web app ini menjadi point penting guna mengetahui gejala dan penyakit lebih spesifik. Sehingga anda tidak perlu ragu lagi akan hasil dari konsultasi pada web aplikasi ini.
            </p>
            <br>
            <h3>Dokter-dokter yang dipercaya</h3>
            <br>
        </div>
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak telepon</th>
                    <th>Spesialis</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dokter as $dokter): ?>
                    <tr>
                        <td><?php echo $dokter->nama ?></td>
                        <td><?php echo $dokter->alamat ?></td>
                        <td><?php echo $dokter->nohp ?></td>
                        <td><?php echo $dokter->spesialis ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>

<?php $this->load->view('layouts/Footer') ?>
