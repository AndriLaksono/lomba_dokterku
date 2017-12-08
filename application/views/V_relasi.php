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
                    <tr>
                        <td>1</td>
                        <td>Demam berdarah</td>
                        <td> <a href="#!" class="btn btn-default">Detail gejala</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<br><br><br>
<?php $this->load->view('layouts/Footer') ?>
