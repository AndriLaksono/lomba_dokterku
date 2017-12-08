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
            <h3 style="color:white !important;margin-top:40px">Log pemeriksaan</h3>
        </p>
    </div>
</section>
<div class="container">
    <section class="section section-white">
        <div class="row">
            <div class="col-sm-12 col-md-6">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="40%">Penyakit</th>
                    <th width="40%">Tanggal</th>
                    <th width="20%"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($log as $d): ?>
                    <tr>
                      <td><?=$d->penyakit?></td>
                      <td><?=$d->tanggal?></td>
                      <td><a class="btn btn-danger" href="<?=base_url()?>index.php/C_log/delete/<?=$d->id_log?>">Hapus</a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('layouts/Footer') ?>
