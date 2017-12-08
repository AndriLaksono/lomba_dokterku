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
            <h3 style="color:white !important;margin-top:40px">Diagnosa</h3>
        </p>
    </div>
</section>

<div class="container">
    <br>
    <a href="<?=base_url()?>index.php/C_diagnosa" class="btn btn-default">&laquo;Kembali</a>
    <br><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-7 col-lg-offset-1">
            <form action="<?=base_url()?>index.php/C_diagnosa/do_update" method="post">
                <legend>Edit diagnosa</legend>
                <div class="form-group">
                  <label for="name">Penyakit</label>
                  <input type="text" name="penyakit" class="form-control" id="name" placeholder="nama penyakit" value="<?=$diagnosa->penyakit?>" required>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea  rows="7" style="width:100% !important" name="keterangan" required><?=$diagnosa->ket?></textarea>
                  <p class="help-block"></p>
                </div>
                <!-- <div class="form-group">
                  <label for="keterangan">Pengobatan alternatif</label>
                  <textarea name="name" rows="8" cols="80">Untuk pengobatan alternatifnya kayak gini gini gini</textarea>
                  <p class="help-block"></p>
                </div> -->
                <input type="hidden" name="id_diagnosa" value="<?=$diagnosa->id_diagnosa?>">

                <div class="form-group">
                  <input type="submit" name="submit" value="Update" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>
<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
