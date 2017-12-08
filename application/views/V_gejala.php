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
            <h3 style="color:white !important">Data gejala</h3>
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
                <div class="form-group">
                  <label for="name">Gejala</label>
                  <input type="text" class="form-control" id="name" placeholder="nama gejala">
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea name="name" rows="8" cols="80"></textarea>
                  <p class="help-block"></p>
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
                <tr>
                    <td>1</td>
                    <td>demam</td>
                    <td>demam kering</td>
                    <td>
                        <a href="#!" class="btn btn-default">Edit</a> &nbsp;
                        <a href="#!" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>pusing</td>
                    <td>pusing pala berbi</td>
                    <td>
                        <a href="#!" class="btn btn-default">Edit</a> &nbsp;
                        <a href="#!" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('layouts/Footer') ?>
