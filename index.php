<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">

    <!-- animate CSS -->
    <link rel="stylesheet" href="animate/animate.min.css">  

      <title>siPeMas</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">siPeMas JKT</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
          </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item" id="lgn">
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Masuk
            </button>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <center>
            <?php
            include("loginserv.php"); 
            ?>

            <form action="" method="post" style="text-align:center;">
            <input type="text" placeholder="Email" id="email" name="email"><br/><br/>
            <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
           
          </div>
          </center>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="Login" name="submit_login">Login</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/2.jpg" id="grd" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="animated fadeInRight" style="animation-delay: 0.5s">SISTEM PENGADUAN MASYARAKAT JAKARTA</h5>
              <p class="animated fadeInLeft" style="animation-delay: 0.5s">Laporkan Keluhanmu Mengenai Infrastruktur Di Jakarta</p>
              <p class="animated fadeInUp" style="animation-delay: 0.5s"><a href="#">Lebih Lanjut</a>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="animated fadeInLeft" style="animation-delay: 0.5s">LAKUKAN LEBIH UNTUK KEMAJUAN KOTA</h5>
              <p class="animated fadeInRight" style="animation-delay: 0.5s">Laporkan Masalah Sarana Dan Prasarana Disini</p>
              <p class="animated fadeInUp" style="animation-delay: 0.5s"><a href="#">Lebih Lanjut</a>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="jumbotron jumbotron-fluid" style="background-color:white; margin-bottom:10px;">
      <div class="container text-center">
        <img src="img/team.png" width="150">
        <br>
        <br>
        <h1 class="display-4">Registrasi</h1>
        <p class="lead">Silahkan Melakukan Registrasi Untuk Dapat melaporkan keluhan Infrastruktur anda</p>
        <a class="btn btn-primary" style="background-color:white; margin-bottom:60px; "href="regis.php" role="button">Registrasi</a>
      </div>

    <div class="jumbotron jumbotron-fluid" >
      <div class="container text-center">
        <img src="img/about-us.png" width="150">
        <h1 class="display-4">Tentang Kami</h1>
        <p class="lead">Kami mengembangkan Website ini demi memudahkan masyarakat Jakarta untuk melaporkan masalah mengenai infrastruktur Jakarta,</p>
        <a class="btn btn-primary" href="#" role="button">Lebih Lanjut</a>
      </div>
    </div>
    </div>
  
    <button type="button" class="btn btn-danger" style="background-color: green !important; padding:60px;">Danger</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>