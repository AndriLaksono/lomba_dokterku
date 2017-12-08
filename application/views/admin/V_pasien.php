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
                      <h1 class="m-n font-thin h3 text-black">Pasien</h1>
                      <small class="text-muted">Halaman manajemen pasien</small>
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
            <div class="panel-heading">
                <h3>Request pendaftaran pasien</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>NO HP</th>
                            <th>Email</th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($nonaktif as $d ): ?>
                        <tr>
                            <td><?=$d->nama?></td>
                            <td><?=$d->username?></td>
                            <td><?=$d->alamat?></td>
                            <td><?=$d->nohp?></td>
                            <td><?=$d->email?></td>
                            <td>
                                  <a href="<?=base_url()?>index.php/admin/c_admin/updatepasien/<?=$d->id_pasien?>/1" class="btn btn-success">terima</a>
                                  <a href="<?=base_url()?>index.php/admin/c_admin/hapuspasien/<?=$d->id_pasien?>" class="btn btn-danger">tolak</a>
                            </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="container" style="padding-left:30px;padding-right:50px">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Daftar pasien</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>NO HP</th>
                            <th>Email</th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aktif as $d ): ?>
                          <tr>
                              <td><?=$d->id_pasien?></td>
                              <td><?=$d->nama?></td>
                              <td><?=$d->username?></td>
                              <td><?=$d->alamat?></td>
                              <td><?=$d->nohp?></td>
                              <td><?=$d->email?></td>
                              <td>
                                  <a href="<?=base_url()?>index.php/admin/c_admin/hapuspasien/<?=$d->id_pasien?>" class="btn btn-danger">hapus</a>
                              </td>
                          </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-2 text-center">
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href>1</a></li>
                            <li><a href>2</a></li>
                            <li><a href>3</a></li>
                            <li><a href>4</a></li>
                            <li><a href>5</a></li>
                            <li><a href><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<?php $this->load->view('admin/layouts/Footer') ?>
