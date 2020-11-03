<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HOME - Checkup Covid-19</title>
  <link rel="icon" href="img/icon.png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/aos/css/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php" data-aos="fade-down"><img src="img/logo.png" alt="" data></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active btn btn-sm"><a class="nav-link" href="index.php">beranda</a></li>
              <li class="nav-item btn btn-sm"><a class="nav-link" href="kasus.php">Kasus</a></li>
              <li class="nav-item btn btn-sm"><a class="nav-link" href="rumahsakit.php">Rumahsakit Rujukan</a></li>
              <li class="nav-item btn btn-sm"><a class="nav-link button-light navbar-light" href="checkup.php">Checkup!</a></li>
              <li class="nav-item btn btn-sm"><a class="nav-link" href="berita.php">berita</a></li>
              <li class="nav-item mr-1 btn btn-sm"><a class="nav-link" href="login.php">login</a></li>
              <li class="nav-item btn btn-sm btn-outline-info"><a class="nav-link" href="daftar.php">daftar</a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <main class="side-main">
    <!--================ Hero sm Banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="20">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/banner/home.png">
            </div>
          </div>
          <div class="col-lg-6 pt-7" data-aos="fade-right">
            <div class="hero-banner__content">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">nama lengkap</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama anda">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">email</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="contoh@email.com">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">kata sandi</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="kata sandi">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">konfirmasi kata sandi</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ulangi kata sandi">
                </div>
                <button type="submit" class="btn btn-info mt-4">daftar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->




    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Copyright &copy;<script>
        document.write(new Date().getFullYear());
      </script> Smatecin All rights reserved
    </div>
    <!-- Copyright -->

    </footer>


    <!-- ================ End footer Area ================= -->

    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>