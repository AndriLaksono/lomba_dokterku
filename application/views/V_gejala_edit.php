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
            <h3 style="color:white !important;margin-top:40px">Data Gejala</h3>
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
            <form action="<?=base_url()?>index.php/C_gejala/do_update" method="post">
                <legend>Edit gejala</legend>
                <div class="form-group">
                  <label for="name">Gejala</label>
                  <input type="text" class="form-control" id="name" placeholder="nama gejala" value="<?=$gejala->gejala?>" name="gejala">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea  rows="7" style="width:100% !important" name="keterangan" required><?=$gejala->ket?></textarea>
                  <p class="help-block"></p>
                </div>
                <input type="hidden" name="id_gejala" value="<?=$gejala->id_gejala?>">
                <div class="form-group">
                  <input type="submit" name="submit" value="Update" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>
<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
