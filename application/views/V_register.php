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
            <h3 style="color:white !important;margin-top:40px">Register (daftar)</h3>
        </p>
    </div>
</section>

<div class="container">
    <section class="section-white">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-offset-4">
                    <?php if ($this->session->flashdata('pesan') != NULL): ?>
                        <div class="alert alert-warning">
                            <?php echo $this->session->flashdata('pesan') ?>
                        </div>
                    <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title center text-center">Daftar</h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?=base_url()?>index.php/C_auth/register" method="post">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
                                </div>
                                <div class="form-group">
                                    <textarea  rows="3" style="width:100% !important" name="alamat" placeholder="alamat" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nohp" class="form-control" id="nomorhp" placeholder="nomor hp" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="kpassword" class="form-control" id="password" placeholder="ulangi password" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Daftar" class="btn btn-primary" style="width:100% !important">
                                </div>
                                <div class="form-group">
                                  <p class="help-block">Sudah punya akun? masuk disini &raquo; <a href="<?=base_url()?>index.php/C_auth">Masuk</a> </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>



<?php $this->load->view('layouts/Footer') ?>
