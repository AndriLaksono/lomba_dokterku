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
            <div class="panel-heading">
                <a href="#!" class="btn btn-default">Tambah dokter</a>
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
                            <th>Spesialis</th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>D001</td>
                            <td>Dokter Thomas</td>
                            <td>thomas</td>
                            <td>Purwokerto, Jawa Tengah</td>
                            <td>087888212221</td>
                            <td>Spesialis mata</td>
                            <td>
                                <a href="#" class="btn btn-default">edit</a>
                                <a href="#" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
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



<!-- / content -->

<?php $this->load->view('admin/layouts/Footer') ?>
