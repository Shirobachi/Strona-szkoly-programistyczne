<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kursy dla programistów</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Line required to have well working responsivnes -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>

    <!-- Add js and jqery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">
          <i class="h1 bi bi-code-square"></i>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#smallNavbar">
          <span class="bi-menu-button"></span>
        </button>

        <div class="collapse navbar-collapse" id="smallNavbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link disabled">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link disabled">Offer</a></li>
            <li class="nav-item"><a href="#" class="nav-link disabled">Team</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            <li class="nav-item">
              <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#sign_in">Sign in</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal Form Registration -->
    <div class="modal fade" id="sign_in" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Sign in</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <form method="post">
                <div class="row">
                  <div class="col p-3">
                    <input type="text" class="form-control" name="rlogin" placeholder="Username" aria-label="Username"/>
                    <input type="password" class="form-control" name="rpass" placeholder="Password" aria-label="Surname"/>
                    <input type="text" class="form-control" name="remail" placeholder="Email" aria-label="Email"/>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>

                  <div class="col p-3">
                    <input type="text" class="form-control" name="llogin" placeholder="Username" aria-label="Username"/>
                    <input type="password" class="form-control" name="lpass" placeholder="Password" aria-label="Surname"/>
                  </div>

                </div>
                <div class="row">
                  <div class="col">
                    <button type="button btn-lg" class="btn btn-outline-success">Create account</button>
                    </form>
                  </div>
                  <div class="col">
                    <button type="button btn-lg" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#log_in">Log in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <span><?php echo $_SESSION['e_code'] ?></span>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- End of Modal -->

    <!-- Slider -->
    <div id="slider" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/zdj1.jpg" class="d-block w-100" alt="..." height="650"/>
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/zdj2.jpg" class="d-block w-100" alt="..." height="650"/>
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/zdj3.jpg" class="d-block w-100" alt="..." height="650"/>
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
      </div>

      <!-- Slider button left/right -->
      <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- 3 column section -->
    <div class="container-fluid">
      <div class="row text-center padding bg-light">
        <div class="col-md-12" id="pomoc">
          <h1 class="display-1">Write code with us!</h1>
          <h1 class="display-6">Best people with huge experience</h1>
          <p id="slogan">Don't waste time and see why you should choice us 👇</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <i class="bi bi-code-slash display-1"></i>
          <h3 class="mt-1">Frontend</h3>
          <p>Learn how to make cool static website. <br />Learn HTML, CSS, JS and more..</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <i class="bi bi-gear display-1"></i>
          <h3 class="mt-1">Beckend</h3>
          <p>If you know how to make static website and want to<br />brisk then you could not be at the better place!</p>
        </div>

        <div class="col-xs-12 col-md-4">
          <i class="bi bi-brush display-1"></i>
          <h3 class="mt-1">Photoshop</h3>
          <p>Making logos, desing pages or maybe just make you a bit prettier,<br />This course will let you do all of this.</p>
        </div>
        <div class="col-md-12"></div>
      </div>

      <div class="bg-dark row text-light">
        <div class="text-center col-12 py-3" id="footer">
          All right reserved &copy 
            <?php echo date("Y") == 2021 ? "2021 " : "2021 - " . date("Y"); ?>
          | Website made by
          <a href="//github.com/shirobachi" target="_blank">Simon Hryszko</a>
          and
          <a href="https://github.com/ValadaRP" target="_blank">Piotr Miciak</a
          >!
        </div>
      </div>
    </div>

    <!-- Enable tultips -->
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

  </body>
</html>