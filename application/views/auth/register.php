<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Goncengan">
  <link rel="shortcut icon" href="<?=base_url('')?>assets/user/images/indonesia.png">
  <title><?=$title?> | Indonesia Pintar</title>
  <link href="<?=base_url('')?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?=base_url('')?>assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register!</h1>
                  </div>
                  <form class="user" method="post" action="" autocomplete="off">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" placeholder="Email" name="email" value="<?=set_value('email')?>" id="email">
                      <small id="text" class="text-danger"></small>
                      <small class="text-danger"><?=form_error('email')?></small>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama" value="<?=set_value('nama')?>" id="nama">
                      <small id="text" class="text-danger"></small>
                      <small class="text-danger"><?=form_error('nama')?></small>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="No Handphone" name="no_hp" value="<?=set_value('no_hp')?>" id="no_hp">
                      <small id="text" class="text-danger"></small>
                      <small class="text-danger"><?=form_error('no_hp')?></small>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                      <small class="text-danger"><?=form_error('password')?></small>
                    </div>
                    <!-- <input type="hidden" class="form-control form-control-user" name="role" value="user"> -->
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Register
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    Sudah punya akun? <a href="<?=site_url('login')?>">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?=base_url('')?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('')?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('')?>assets/js/sb-admin-2.min.js"></script>
</body>
</html>