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
    <a href="<?=base_url()?>index.php/C_diagnosa/" class="btn btn-default">&laquo;Kembali</a>
    <br><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-7 col-lg-offset-1">
            <form action="<?=base_url()?>index.php/C_diagnosa/do_insert_obat" method="post">
                <div class="form-group">
                  <label for="penyakit">Penyakit</label>
                  <input type="hidden" name="id_penyakit" value="<?=$diagnosa->id_diagnosa?>">
                  <input type="text" class="form-control" name="penyakit" value="<?=$diagnosa->penyakit?>" readonly>
                </div>
                <div class="form-group">
                  <label for="keterangan">Cara Pengobatan</label>
                      <textarea  rows="7" class="form-control" style="width:100% !important" name="cara" required></textarea>
                </div>
                <!-- <div class="form-group">
                  <label for="keterangan">Pengobatan alternatif</label>
                  <textarea name="name" rows="8" cols="80"></textarea>
                  <p class="help-block"></p>
                </div> -->

                <div class="form-group">
                  <input type="submit" name="submit" value="Tambah" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Cara Pengobatan</th>
                    <!-- <th>Pengobatan alternatif</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pengobatan as $d): ?>
                    <tr>
                        <td><?=$d->cara_pengobatan?></td>
                        <td>
                          <a class="btn btn-default" href="<?=base_url()?>index.php/C_diagnosa/update_obat/<?=$d->id_pengobatan?>">Edit</a> &nbsp;
                          <a class="btn btn-danger" href="<?=base_url()?>index.php/C_diagnosa/do_delete_obat/<?=$d->id_pengobatan?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<br><br><br>

<?php $this->load->view('layouts/Footer') ?>
