<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Dokterku - Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="<?=base_url()?>assets/admin_assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin_assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin_assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin_assets/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin_assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin_assets/css/app.css" type="text/css" />

</head>
<body>
<div class="app app-header-fixed  ">

  <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
          <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" ui-toggle="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="<?=base_url()?>index.php/admin/C_admin" class="navbar-brand text-lt">
          <i class="fa fa-windows"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">Dokterku</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle="app-aside-folded" target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md"><?php echo $this->session->userdata('nama') ?></span>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li>
                <a href="<?=base_url()?>index.php/admin/C_admin/logout">Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->

  <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
        <div class="aside-wrap">
            <div class="navi-wrap">

              <!-- nav -->
              <nav ui-nav class="navi clearfix">
                <ul class="nav">
                  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span>Navigation</span>
                  </li>
                  <li>
                    <a href="<?=base_url()?>index.php/admin/C_admin/diagnosa">
                      <i class="glyphicon glyphicon-briefcase icon"></i>
                      <span>Diagnosa</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>index.php/admin/C_admin/dokter">
                      <i class="icon-user icon text-success-lter"></i>
                      <span>Dokter</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>index.php/admin/C_admin/pasien">
                      <i class="icon-user icon"></i>
                      <span>Pasien</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- nav -->
            </div>
        </div>
  </aside>
  <!-- / aside -->
