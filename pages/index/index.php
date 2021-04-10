<!DOCTYPE html>
<html>
  <head>
    <?php require("../common/head.php"); ?>
    <title>Kursy dla programistów</title>
  </head>
  <body>

    <?php require("../common/navbar.php"); ?>
    <?php include("../common/slider.php"); ?>
    <!-- 3 column section -->
    <div class="container-fluid">
      
      <div class="row text-center p-xl-4 bg-light">
        <div class="col-md-12" id="pomoc">
          <h1 class="display-1">Write code with us!</h1>
          <h1 class="display-6">Best people with huge experience</h1>
          <p id="slogan">Don't waste time and see why you should choice us 👇</p>
        </div>
      </div>

      <div class="row text-center p-xl-5">
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
      <?php include("../common/footer.php"); ?>
      
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