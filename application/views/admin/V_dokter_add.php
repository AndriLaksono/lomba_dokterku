<?php $this->load->view('admin/layouts/Header') ?>

<div id="content" class="app-content" role="main">
  <div class="app-content-body ">
      <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
      app.settings.asideFolded = false;
      app.settings.asideDock = false;
      ">
      <!-- main -->
      <div class="col">
          <!-- main header -->
          <div class="bg-light lter b-b wrapper-md">
              <div class="row">
                  <div class="col-sm-6 col-xs-12">
                      <h1 class="m-n font-thin h3 text-black">Dokter</h1>
                      <small class="text-muted">Halaman manajemen dokter</small>
                  </div>
              </div>
          </div>
          <!-- / main header -->
      </div>
  </div>
</div>

<div class="container" style="padding-left:30px;padding-right:50px">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading font-bold">Tambah Dokter</div>
            <div class="panel-body">
              <form class="bs-example form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10 col-md-6">
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10 col-md-6">
                    <textarea name="name" rows="8" cols="80" class="form-control" placeholder="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor HP</label>
                  <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" placeholder="Nomor HP">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Select</label>
                  <div class="col-sm-10 col-md-6">
                    <select name="spesialis" class="form-control m-b">
                      <option>Penyakit dalam</option>
                      <option>Anak</option>
                      <option>Gigi</option>
                      <option>THT</option>
                      <option>Kulit</option>
                      <option>Mata</option>
                      <option>Syaraf</option>
                      <option>Gizi</option>
                    </select>
                  </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-sm btn-info">Tambahkan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
<!-- / content -->

<?php $this->load->view('admin/layouts/Footer') ?>
