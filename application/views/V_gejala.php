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
    <a href="<?=base_url()?>index.php/C_dokter" class="btn btn-default">&laquo;Kembali</a>
    <br><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-7 col-lg-offset-1">
            <form action="<?=base_url()?>index.php/C_gejala/do_insert" method="post">
                <div class="form-group">
                  <label for="name">Gejala</label>
                  <input type="text" class="form-control" id="name" placeholder="nama gejala" name="gejala" required>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea  rows="7" style="width:100% !important" name="keterangan" required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Tambah" class="btn btn-default btn-brown">
                </div>

            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gejala</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gejala as $d): ?>
                    <tr>
                        <td><?php echo $d->id_gejala ?></td>
                        <td><?php echo $d->gejala ?></td>
                        <td><?php echo $d->ket ?></td>
                        <td>
                            <a href="<?=base_url()?>index.php/C_gejala/update/<?=$d->id_gejala?>" class="btn btn-default">Edit</a> &nbsp;
                            <a href="<?=base_url()?>index.php/C_gejala/do_delete/<?=$d->id_gejala?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
