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
                      <h1 class="m-n font-thin h3 text-black">Diagnosa (penyakit)</h1>
                      <small class="text-muted">Halaman statistik penyakit warga</small>
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
                <h2>TOP 5 Penyakit yang dialami oleh warga</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>ID penyakit</th>
                            <th>Penyakit</th>
                            <th>Jumlah korban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($gejala as $d): ?>
                          <tr>
                              <td><?=$d->id_diagnosa?></td>
                              <td><?=$d->penyakit?></td>
                              <td><?=$d->jumlah?></td>
                          </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/layouts/Footer') ?>
