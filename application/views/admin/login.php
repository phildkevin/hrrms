<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HRRMS</title>

      <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('assets/vendor/fa/css/font-awesome.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables/datatables.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin.css') ?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">

      <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
      <script type="text/javascript" src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
      <script type="text/javascript" src="<?= base_url('assets/js/sb-admin.js')?>"></script>
      <script type="text/javascript" src="<?= base_url('assets/js/sweetalert.min.js') ?>"></script>
      <script type="text/javascript" src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
      <script type="text/javascript" src="<?= base_url('assets/datatables/datatables.min.js')?>"></script>

      <input type="hidden" id="base_url" value="<?= base_url() ?>">
  </head>
  <body>

    <div class="admin-login">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12 admin-content">
            <div class="admin-login-title">
              <span>Login</span>
            </div>
            <form id="loginform">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div>
                <div class="error-div">

                </div>
                <button type="submit" class="btn btn-success thmBtn-light float-right">Login</button>
              </div>
            </form>
          </div>
          <div class="col"></div>
        </div>
      </div>

    </div>

    <script type="text/javascript">
          $(document).on('submit', '#loginform', function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({

              type     : "POST",
              url      : $('#base_url').val() + "fadmin/login",
              dataType : "JSON",
              data     : data,

              success  : function(data) {
                if (data.code == 1) {
                  $('.error-div').html(data.reply);
                }else if(data.code == 2){
                  window.location.href = "admin/dashboard";
                }
              }


            })

          })
    </script>

  </body>
</html>
