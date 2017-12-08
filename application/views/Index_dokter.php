<?php $this->load->view('layouts/Header') ?>
<section style="background-color:#5D382C">
    <br><br><br>
    <div class="container">
        <div class="center text-center">
            <h3 class="white-text">Halaman dokter</h3>
            <p class="white-text">Haloo dokter <b><?php echo $this->session->userdata('nama') ?></b>, senang bisa bertemu anda kembali.</p>
            <br>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="<?=base_url()?>index.php/C_gejala" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/dokter/data-gejala.png" alt="" width="95%">
                        <h5 class="text-center white-text">Data gejala</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?=base_url()?>index.php/C_diagnosa" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/dokter/diagnosa.png" alt="" width="95%">
                        <h5 class="text-center white-text">Diagnosa</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?=base_url()?>index.php/C_relasi" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/dokter/relasi.png" alt="" width="95%">
                        <h5 class="text-center white-text">Relasi</h5>
                    </p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#!" class="icon-8-depan">
                    <p class="text-center">
                        <img src="<?=base_url()?>assets/images/dokter/konsultasi.png" alt="" width="95%">
                        <h5 class="text-center white-text">Konsultasi</h5>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <br><br><br>
</section>
<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
