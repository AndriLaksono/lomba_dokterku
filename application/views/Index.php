<?php $this->load->view('layouts/Header') ?>

<style media="screen">
    .section-parallax{
        height: 550px;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<section class="section-parallax" style="background-image:url(<?=base_url()?>assets/images/front/bg-wayang3.png)">
    &nbsp;
</section>

<!-- section 4 icon -->
<div class="container">
    <section class="section-white">
            <div class="center text-center">
                <h2>Kenapa Menggunakan Dokterku</h2>
                <p>Berbagai menfaat yang akan anda terima dari aplikasi DOKTERKU, sebuah pencegahan lebih baik dari pada mengobati. Sehatkan diri anda!</p>
                <br>
            </div>
            <div class="portfolio-info">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-konsultasi.png" alt="" width="70%">
                            <h5 class="text-center">Konsultasi Online</h5>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-sehat.png" alt="" width="70%">
                            <h5 class="text-center">Pengobatan Tradisional</h5>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-dokter.png" alt="" width="70%">
                            <h4 class="text-center">Dokter Spesialis</h4>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-terpercaya.png" alt="" width="70%">
                            <h4 class="text-center">Terpercaya</h4>
                        </p>
                    </div>
                </div>
            </div>
    </section>
</div>

<section class="section-dark" style="background-color:#5D382C">
    <div class="container">
        <a href="<?=base_url()?>index.php/C_konsultasi">konsultasi</a>
    </div>
</section>

<?php $this->load->view('layouts/Footer') ?>
