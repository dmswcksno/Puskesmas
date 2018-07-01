<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Puskesmas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
            <h2><b>MENU REGISTRASI</b></h2>
            <?php echo validation_errors(); ?>
            <br>
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
            <br>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <br>
            <button class="btn btn-info" type="submit">DAFTAR</button>

            <a href="<?php echo base_url('index.php/Login') ?>" class="btn btn-warning">LOGIN</a>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div> 
    </div>
  </body>
</html>