<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Choices.js [Custom select]-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="wide" id="all">
      <!-- Top bar-->
      
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-uppercase" id="login-modalLabel">Customer Login</h4>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group mb-3">
                  <input class="form-control" id="email_modal" type="text" placeholder="email">
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" id="password_modal" type="password" placeholder="password">
                </div>
                <p class="text-center">
                  <button class="btn btn-outline-primary"><i class="fas fa-door-open"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted small">Not registered yet?</p>
              <p class="text-center text-muted small"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Sticky-->
      <header class="nav-holder make-sticky">
        <div class="navbar navbar-light bg-white navbar-expand-lg py-0" id="navbar">
          <div class="container py-3 py-lg-0 px-lg-0">
            <!-- Navbar brand--><a class="navbar-brand" href="index.html"><img class="d-none d-md-inline-block" src="img/logoss.png" alt="Universal logo"><img class="d-inline-block d-md-none" src="img/logo-small.png" alt="Universal logo"><span class="sr-only">Universal - go to homepage</span></a>
            <!-- Navbar toggler-->
            <button class="navbar-toggler text-primary border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navigationCollapse" aria-controls="navigationCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="sr-only">Toggle navigation</span><i class="fas fa-align-justify"></i></button>
            <!-- Collapsed Navigation    -->
            <div class="collapse navbar-collapse" id="navigationCollapse">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- dropdown menu [contact]-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Get Started</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="{{ route('register') }}">Register</a></li>                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- HERO SLIDER SECTION-->
      <section class="text-white bg-cover bg-center primary-overlay overlay-dense" style="background: url('img/photogrid2.jpg') repeat">
        <div class="overlay-content py-5">
          <div class="container py-4">
            <!-- Hero slider-->
            <div class="swiper-container homepage-slider">
              <div class="swiper-wrapper">
                <!-- Hero Slide-->
                <div class="swiper-slide h-auto mb-5">
                  <div class="row gy-5 h-100 align-items-center">
                    <div class="col-lg-5 text-lg-end">
                      <h1 class="text-uppercase">Toko Buku Online</h1>
                      <ul class="list-unstyled text-uppercase fw-bold mb-0">
                        <li class="mb-2">Jual Buku Premium</li>
                        <li>Harga Terjangkau</li>
                      </ul>
                    </div>
                    <div class="col-lg-7"><img class="img-fluid" src="img/book.png" alt=""></div>
                  </div>
                </div>
                <!-- Hero Slide-->
                <div class="swiper-slide h-auto mb-5">
                  <div class="row gy-5 h-100 align-items-center">
                    <div class="col-lg-7"><img class="img-fluid" src="img/book2.png" alt=""></div>
                    <div class="col-lg-5">
                      <h1 class="text-uppercase">Kenapa Books Now?</h1>
                      <ul class="list-unstyled text-uppercase fw-bold mb-0">
                        <li class="mb-2">- Tersedia Banyak Buku</li>
                        <li class="mb-2">- Harga Terjangkau</li>
                        <li class="mb-2">- Transaksi Mudah</li>
        
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Hero Slide-->
                <div class="swiper-slide h-auto mb-5">
                  <div class="row gy-5 h-100 align-items-center">
                    <div class="col-lg-5 text-lg-end">
                      <h1 class="text-uppercase">Ayo Belanja di Books Now!</h1>
                      <ul class="list-unstyled text-uppercase fw-bold mb-0">
                      </ul>
                    </div>
                    <div class="col-md-7"><img class="img-fluid" src="img/book.png" alt=""></div>
                  </div>
                </div>
                <!-- Hero Slide-->
                <div class="swiper-slide h-auto mb-5">
                  <div class="row gy-5 h-100 align-items-center">
                    <div class="col-lg-7"><img class="img-fluid" src="img/book2.png" alt=""></div>
                    <div class="col-lg-5">
                      <h1 class="text-uppercase">Pelanggan Senang Kami Pun Senang</h1>
                      <ul class="list-unstyled text-uppercase fw-bold mb-0">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination swiper-pagination-light"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- CLIENT SECTION-->
      <section class="py-5 bg-gray-200">
        <div class="container py-4">
          <header class="mb-5">
            <h2 class="text-uppercase lined lined-center mb-4">Sponsored By : </h2>
          </header>
          <!-- Customer slider-->
          <div class="row-md-8">
            <div class="swiper-wrapper">
              <div class="swiper-slide h-auto"><img class="img-fluid img-grayscale d-block mx-auto" src="img/hmti-colored.png" alt="..." width="140"></div>
            </div>
          </div>
        </div>
      </section>
        <!-- COPYRIGHTS                -->
        <div class="bg-dark py-5">
          <div class="container">
            <div class="row align-items-cenrer gy-3 text-center">
              <div class="col-md-6 text-md-start">
                <p class="mb-0 text-sm text-gray-500">&copy; 2022. Praktikum Prognet Kelompok 17 </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/waypoints/lib/noframework.waypoints.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.js"></script>
    <script src="js/theme.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>