<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dokterku</title>

        <link rel="shortcut/icon" href="<?=base_url()?>assets/images/front/favicon.png">

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">

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
              <a class="navbar-brand" href="<?=base_url()?>"> <img src="<?=base_url()?>assets/images/front/favicon.png" alt=""> </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="#">Home</a></li>
                <li class=""><a href="#">Log pemeriksaan</a></li>
                <li class=""><a href="#">Login</a></li>
                <?php if ($this->session->userdata('pasien')): ?>
                    <li><a href="#">Logout</a></li>
                <?php endif; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
