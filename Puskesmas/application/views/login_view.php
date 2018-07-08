<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login View</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css') ?>"></style>
   <!--  <script type="text/javascript" href="<?php echo base_url('assets/js/login.js') ?>"></script> -->
  </head>

  <body>
<div class="row" style="margin-top:60px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
              <form class="form-signin"  method="post" action="<?php echo base_url('index.php/Login/cekLogin') ?>">
      <fieldset>
        <h2><center>Please Sign In</center></h2>
        <hr class="colorgraph">
        <div class="form-group">
                    <input type="text" id="username" name="username" class="form-control input-group-sm" placeholder="Username">
        </div>
        <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control input-group-sm" placeholder="Password">
        </div>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-group-sm btn-success btn-block" value="Login" method="post" action="<?php echo base_url('index.php/Login/cekLogin') ?>">
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-group-sm btn-primary btn-block">Register</a>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

</div>
  </body>
</html>