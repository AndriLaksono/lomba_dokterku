<?php $this->load->view('layouts/Header') ?>
<section class="section-dark" style="background-color:#5D382C;height:200px">
    <div class="container">
        <p class="text-center">
            <h1 style="color:white !important">Hasil Konsultasi</h1>
        </p>
    </div>
</section>
<div class="container">
    <section class="section section-white">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h4>Anda terkena panyakit <?php echo $hasil->penyakit ?></h4>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('layouts/Footer') ?>
