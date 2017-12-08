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
<section class="section-dark" style="background-color:#5D382C;height:100px;margin-top:-50px !important">
    <div class="container">
        <p class="text-center">
            <h3 style="color:white !important">Diagnosa</h3>
        </p>
    </div>
</section>

<div class="container">
    <br>
    <a href="#!" class="btn btn-default">&laquo;Kembali</a>
    <br><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-7 col-lg-offset-1">
            <form action="" method="post">
                <legend>Edit diagnosa</legend>
                <div class="form-group">
                  <label for="name">Penyakit</label>
                  <input type="text" class="form-control" id="name" placeholder="nama penyakit" value="Demam berdarahh">
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea name="name" rows="8" cols="80">Ya kalo demam berdarah dianjurkan gini , gini , gini...</textarea>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="keterangan">Pengobatan alternatif</label>
                  <textarea name="name" rows="8" cols="80">Untuk pengobatan alternatifnya kayak gini gini gini</textarea>
                  <p class="help-block"></p>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Update" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>
<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
