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
    .checkbox{
        width: 25px !important;
        height: 14px !important;
        display: inline !important;
    }
    .kotakan{
        border: 2px solid #959194;
        border-radius: 3px;
        padding: 20px;
    }
</style>
<section class="section-dark" style="background-color:#5D382C;height:100px;margin-top:-50px !important">
    <div class="container">
        <p class="text-center">
            <h3 style="color:white !important">Relasi</h3>
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
        <div class="col-sm-12 col-md-12 col-lg-10">
            <form action="index.html" method="post">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="penyakit">Penyakit</label>
                            <input type="text" class="form-control" id="penyakit" value="Demam berdarah" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group kotakan">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <input type="checkbox" class="form-control checkbox" id="ck1">
                          <label for="ck1">Sehatt</label>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <input type="checkbox" class="form-control checkbox" id="ck2">
                          <label for="ck2">Kuat</label>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <input type="checkbox" class="form-control checkbox" id="ck3">
                          <label for="ck3">bergizi</label>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <input type="checkbox" class="form-control checkbox" id="ck4">
                          <label for="ck4">mantapp</label>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <input type="checkbox" class="form-control checkbox" id="ck5">
                          <label for="ck5">menyegarkan</label>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <input type="checkbox" class="form-control checkbox" id="ck6">
                          <label for="ck6">heemmmm</label>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Update relasi" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>



<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
