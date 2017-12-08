<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dokterku</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/front/favicon.png">

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">

        <!-- custom css -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

        <!-- Jquery -->
        <script src="<?=base_url()?>assets/jquery/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=base_url()?>"> <img src="<?=base_url()?>assets/images/front/dokterku-logo.png" alt=""> </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav">
                <li><a href="<?=base_url()?>">Home</a></li>
                <?php if ($this->session->userdata('id_pasien')): ?>
                    <li><a href="#">Log pemeriksaan</a></li>
                    <li><a href="<?=base_url()?>index.php/C_auth/logout">Logout</a></li>
                <?php elseif($this->session->userdata('id_dokter')): ?>
                    <li><a href="<?=base_url()?>index.php/C_dokter">Dokter</a></li>
                    <li><a href="<?=base_url()?>index.php/C_auth/logout">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?=base_url()?>index.php/C_start/tentang">Tentang</a></li>
                    <li><a href="<?=base_url()?>index.php/C_auth">Masuk</a></li>
                    <li><a href="<?=base_url()?>index.php/C_auth/regispage">Daftar</a></li>
                <?php endif; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
