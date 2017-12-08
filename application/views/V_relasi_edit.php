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

<?php
  $gejalaarr[] = '';
  $checked = '';
?>

<section class="section-dark" style="background-color:#5D382C;height:100px;margin-top:-50px !important">
    <div class="container">
        <p class="text-center">
            <h3 style="color:white !important">Relasi</h3>
        </p>
    </div>
</section>

<div class="container">
    <br>
    <a href="<?=base_url()?>index.php/C_relasi" class="btn btn-default">&laquo;Kembali</a>
    <br><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-10">
            <form action="<?=base_url()?>index.php/C_relasi/update" method="post">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="penyakit">Penyakit</label>
                            <input type="text" class="form-control" id="penyakit" value="<?=$diagnosa->penyakit?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group kotakan">
                    <div class="row">
                      <input type="hidden" name="id" value="<?=$diagnosa->id_diagnosa?>">
                      <?php
                      $i = 0;
                      foreach ($relasi as $x):
                        $gejalaarr[$i] = $x->id_gejala;
                        $i++;
                      endforeach; ?>
                      <?php
                        $n = 0;
                        foreach ($gejala as $y):
                          $checked = '';
                          for ($n=0; $n < $i ; $n++) {
                            if ($gejalaarr[$n] == $y->id_gejala):
                              $checked = 'checked';
                            endif;
                          }
                      ?>
                      <div class="col-sm-12">
                          <input type="checkbox" name="gejala[]" value="<?=$y->id_gejala?>" <?php echo $checked;?> id="<?=$y->gejala?>" class="form-control checkbox">
                          <label for="<?=$y->gejala?>"><?=$y->gejala?></label>
                      </div>
                      <?php
                        endforeach;
                      ?>
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
