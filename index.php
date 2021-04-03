<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kursy dla programistów</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php require_once("manager.php"); require_once("functions.php"); ?>
    <?php require_once("common/navbar.php"); ?>
    <?php require_once("common/slider.php"); ?>

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

    <?php require_once("common/footer.php"); ?>

    <!-- Enable tultips -->
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

  </body>
</html>

<!-- Modal Registration -->
<!-- Modal login -->
<div class="modal fade" id="sign_in" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <form method="post">
                <input required type="text" class="form-control <?php classValidator('rlogin')?>" name="rlogin" placeholder="Username" value="<?php echo (isset($_POST['rlogin']) and $_SESSION['code'] != 'registerSuccess') ? $_POST['rlogin'] : "" ?>"/>
                <input required type="password" class="form-control <?php classValidator('rpass')?>" name="rpass" placeholder="Password"/>
                <input required type="text" class="form-control <?php classValidator('rmail')?>" name="rmail" placeholder="Email"  value="<?php echo (isset($_POST['rmail']) and $_SESSION['code'] != 'registerSuccess') ? $_POST['rmail'] : "" ?>"/>

                <div id="emailHelp" class="form-text my-2">We'll never share your email with anyone else.</div>
                <button type="button btn-lg" class="btn btn-outline-success">Create account</button>
              </form>
            </div>
            
            <div class="col-6">
              <form method="post">
                <input required type="text" class="form-control <?php classValidator('llogin') ?>" name="llogin" placeholder="Username" value="<?php echo isset($_POST['llogin']) ? $_POST['llogin'] : "" ?>"/>
                <input required type="password" class="form-control" name="lpass" placeholder="Password"/>

                <div id="emailHelp" class="form-text my-2">By log-in you agree that we're the best!</div>
                <button type="button btn-lg" class="btn btn-outline-success">Log in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>