
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Puskesmas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>

  <body>
      <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Puskesmas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Pegawai">Pegawai<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Antrian">Antrian<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="User">User <span class="sr-only">(current)</span></a>
      </li>
    <form class="form-inline mt-2 mt-md-0">
          <a href="<?php echo base_url('index.php/Login/logout') ?>" class="btn btn-warning my-2 my-sm-0 ml-2">LOGOUT</a>
    </form>
  </div>
</nav>
 </div>
   <main role="main" class="container">
      <a href="<?php echo base_url('index.php/Pegawai/create') ?>" class="btn btn-primary my-3">Tambah</a>
      <table class="table table-hover">
        <thead>
          <th>No</th>
          <th>Nama Dokter</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Foto</th>
          <th>Spesialis</th>
          <th>Status</th>
          <th>Aksi</th>

        </thead>
        <tbody>
          <?php foreach ($pegawai_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['nama'] ?></td>
              <td><?php echo $value['tanggalLahir'] ?></td>
              <td><?php echo $value['alamat'] ?></td>
              <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $value['foto']?>" alt="" width=100 height=100></td>
              <td><?php echo $value['spesialis'] ?></td>
              <td><?php echo $value['status'] ?></td>
              <td>
                <a href="<?php echo base_url("index.php/Pegawai/update/".$value['id']) ?>" class="btn btn-sm btn-success">Edit</a>
                <a href="<?php echo base_url("index.php/Pegawai/deleteData/".$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>

</html>

