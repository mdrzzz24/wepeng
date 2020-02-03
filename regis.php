<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php
      include("regisserv.php")
      ?>
    <h1 style="text-align:center; padding-top:50px;">Masukan Data Registrasi</h1>
    <div class="container" style="margin-top:80px; padding-right:200px; padding-left:200px;">
    <form action="regisserv.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Kata Sandi</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukan Kata Sandi">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">NIK</label>
        <input type="text" class="form-control" name="nik" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIK">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">No. Telepon</label>
        <input type="text" class="form-control" name="no_hp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No.Tlp">
    </div>
    <button type="submit" name="reg_user" class="btn btn-primary">Submit</button>
    <a href="index.php" style="background-color: #5a6268  border: 0px; margin-top: 2px" class="btn btn-secondary ml-2" role="button" aria-pressed="true">Kembali</a>
    </form>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>