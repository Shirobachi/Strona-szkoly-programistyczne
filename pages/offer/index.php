<!DOCTYPE html>
<html>
  <head>
    <?php require("../common/head.php"); ?>
    <title>Kursy dla programistów</title>
  </head>
  <body>

    <?php require("../common/navbar.php"); ?>
    <?php include("../common/slider.php"); ?>

    <div class="container p-xl-5" style="max-width: 75%;">
      <div class="row">
        <div class="col-md-4">
          <div class="card  ms-xl-5">
            <img src="../../sources/img/offer1.jpg" class="card-img-top " alt="Image" height="300">
            <div class="card-body">
              <h2 class="card-title">HTML &amp; CSS</h2>
              <p>Try with us to build splendid websites! With using HTML &amp; CSS and JavaScript</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card ms-xl-5">
            <img src="../../sources/img/offer2.jpg" class="card-img-top" alt="Image" height="300">
            <div class="card-body">
              <h2 class="card-title">PHP</h2>
              <p>We will teach you how to code in back-end language like PHP</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card ms-xl-5">
            <img src="../../sources/img/offer3.jpg" class="card-img-top" alt="Image" height="300">
            <div class="card-body">
              <h2 class="card-title">PhotoShop</h2>
              <p>You will learn how to prepare images for your websites with one of the best software on market! </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h1 class="display-1 text-center">You will have chance to work with best 
        professionalists</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card md-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../../sources/img/offer3.jpg" alt="img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4>Simon Hryszko</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquam porta arcu sit amet tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse varius facilisis elit eleifend molestie. In eget blandit purus. Fusce aliquet nisi pulvinar magna faucibus, at mattis tellus tempor. Duis pulvinar ornare massa id porta. Suspendisse et eros non leo rutrum suscipit. Phasellus nec velit at dolor euismod mollis.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>
    <!--<div class="container">-->
      
    <!--</div>-->
    <div class="container-fluid">
       
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