<?php $this->load->view('layouts/Header') ?>

<style media="screen">
    .btn.btn-default.btn-brown{
        color: white !important;
        background-color: #B86A30 !important;
    }
    .section-parallax{
        background-position: 50% 50%;
        height: 550px;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
    /*img.4-icon{
        width: 50%;
    }
    @media only screen and(max-width:600px) {
        img.4-icon{
            width: 50% !important;
        }
    }*/
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
                            <img src="<?=base_url()?>assets/images/front/bottom-konsultasi.png" alt="" width="50%" class="4-icon">
                            <h5 class="text-center">Konsultasi Online</h5>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-sehat.png" alt="" width="50%" class="4-icon">
                            <h5 class="text-center">Pengobatan Tradisional</h5>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-dokter.png" alt="" width="50%" class="4-icon">
                            <h4 class="text-center">Dokter Spesialis</h4>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center">
                            <img src="<?=base_url()?>assets/images/front/bottom-terpercaya.png" alt="" width="50%" class="4-icon">
                            <h4 class="text-center">Terpercaya</h4>
                        </p>
                    </div>
                </div>
            </div>
    </section>
</div>

<section class="section-8-icon" style="background-color:#5D382C">
    <div class="container">
        <div class="center text-center">
            <h2 class="white-text">DOKTERKU</h2>
            <p class="white-text">Dokterku adalah aplikasi untuk mendeteksi penyakit anda. Dengan mengetahui gejala-gejalanya lebih awal, anda dapat mengetahui apa dan bagaimana keadaan kesehatan anda sekarang ini.</p>
            <h4 class="white-text">SING SEHAT SING WARAS :)</h4>
            <br>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/penyakit-dalam.png" alt="" width="70%">
                        <h5 class="text-center white-text">Penyakit dalam</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/anak.png" alt="" width="70%">
                        <h5 class="text-center white-text">Anak</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/gigi.png" alt="" width="70%">
                        <h5 class="text-center white-text">Gigi</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/tht.png" alt="" width="70%">
                        <h5 class="text-center white-text">THT</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/kulit.png" alt="" width="70%">
                        <h5 class="text-center white-text">Kulit</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/mata.png" alt="" width="70%">
                        <h5 class="text-center white-text">Mata</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/saraf.png" alt="" width="70%">
                        <h5 class="text-center white-text">Syaraf</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/front/gizi.png" alt="" width="70%">
                        <h5 class="text-center white-text">Gizi</h5>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-white">
    <div class="container">
        <div class="center text-center">
            <h4>Daftar Ke dokterku sekarang untuk jasmani yang lebih sehat!</h4>
            <p>
                <a href="#!" class="btn btn-default btn-brown">Daftar</a> &nbsp;
                <a href="#!" class="btn btn-default">Login</a>
            </p>
            <br>
        </div>
    </div>
</section>

<?php $this->load->view('layouts/Footer') ?>
