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
            <h3 style="color:white !important;margin-top:40px">Pengobatan <?=$title->penyakit?></h3>
        </p>
    </div>
</section>

<div class="container">
    <br>
    <a href="<?=base_url()?>index.php/C_diagnosa/show_pengobatan/<?=$this->session->userdata('page')?>" class="btn btn-default">&laquo;Kembali</a>
    <br><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-7 col-lg-offset-1">
            <form action="<?=base_url()?>index.php/C_diagnosa/do_update_obat" method="post">
              <input type="hidden" name="id" value="<?=$dataobat->id_pengobatan?>">
                <div class="form-group">
                  <label for="penyakit">Penyakit</label>
                  <select style="width:100% !important" class="form-control" name="id_penyakit" required>
                      <option value=""></option>
                      <?php
                        $selected = '';
                        foreach ($diagnosa as $data):
                      ?>
                        <?php if ($dataobat->id_diagnosa==$data->id_diagnosa):
                          echo 'selected';
                        endif; ?>
                        <option value="<?=$data->id_diagnosa?>" <?php if ($dataobat->id_diagnosa==$data->id_diagnosa): echo 'selected';endif; ?>><?=$data->penyakit?></option>
                      <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="keterangan">Cara Pengobatan</label>
                      <textarea  rows="7" style="width:100% !important" class="form-control" name="cara" required><?=$dataobat->cara_pengobatan?></textarea>
                </div>
                <!-- <div class="form-group">
                  <label for="keterangan">Pengobatan alternatif</label>
                  <textarea name="name" rows="8" cols="80"></textarea>
                  <p class="help-block"></p>
                </div> -->

                <div class="form-group">
                  <input type="submit" name="submit" value="Update" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>

<br><br><br>

<?php $this->load->view('layouts/Footer') ?>
