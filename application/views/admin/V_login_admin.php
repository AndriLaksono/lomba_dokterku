<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Doketerku - Admin login</title>
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


<div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <div class="m-b-lg">
    <div class="wrapper text-center">
        <?php if ($this->session->flashdata('pesan')): ?>
            <div class="alert alert-warning">
                <?php echo $this->session->flashdata('pesan') ?>
            </div>
        <?php endif; ?>
        <br>
      <h4> <strong>Login</strong> </h4>
    </div>
    <form name="form" class="form-validation" action="<?=base_url()?>index.php/admin/C_admin/do_login" method="post">
      <div class="text-danger wrapper text-center" ng-show="authError">

      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="Email" class="form-control no-border" required name="email">
        </div>
        <div class="list-group-item">
           <input type="password" placeholder="Password" class="form-control no-border" required name="password">
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block">Log in</button>
    </form>
  </div>
</div>


</div>

<script src="<?=base_url()?>assets/admin_assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/admin_assets/js/bootstrap.js"></script>
<script src="<?=base_url()?>assets/admin_assets/js/ui-load.js"></script>
<script src="<?=base_url()?>assets/admin_assets/js/ui-jp.config.js"></script>
<script src="<?=base_url()?>assets/admin_assets/js/ui-jp.js"></script>
<script src="<?=base_url()?>assets/admin_assets/js/ui-nav.js"></script>
<script src="<?=base_url()?>assets/admin_assets/js/ui-toggle.js"></script>

</body>
</html>
