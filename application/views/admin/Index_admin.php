<?php $this->load->view('admin/layouts/Header') ?>
  <!-- content -->
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
          <h1 class="m-n font-thin h3 text-black">Dashboard Admin</h1>
          <small class="text-muted">Selamat datang di admin</small>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-7">
          <div class="row row-sm text-center">
            <div class="col-xs-4">
              <div class="panel padder-v item">
                <div class="h1 text-info font-thin h1"><?=$penyakit?></div>
                <span class="text-muted text-xs">Penyakit</span>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="panel padder-v item">
                <div class="h1 text-info font-thin h1"><?=$dokter?></div>
                <span class="text-muted text-xs">Dokter spesialis</span>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="panel padder-v item">
                <div class="h1 text-info font-thin h1"><?=$pasien?></div>
                <span class="text-muted text-xs">Pasien</span>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


    </div>
  </div>
  <!-- / content -->
</div>
</div>
</div>

<?php $this->load->view('admin/layouts/Footer') ?>
