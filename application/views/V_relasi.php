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
            <h3 style="color:white !important;margin-top:40px">Relasi</h3>
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
        <div class="col-sm-12 col-md-8 col-lg-6">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Peyakit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($diagnosa as $data): ?>
                        <tr>
                            <td><?php echo $data->id_diagnosa ?></td>
                            <td><?php echo $data->penyakit ?></td>
                            <td> <a href="<?=base_url()?>index.php/C_relasi/edit/<?=$data->id_diagnosa?>" class="btn btn-default">Detail gejala</a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
