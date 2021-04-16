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
      
      
    </div>
    <div class="container p-xl-5" style="max-width: 75%;">
      <div class="row">
        <h1 class="display-1 text-center p-xl-5">You will have chance to work with best 
        professionalists</h1>
      </div>
      <div>
        <div class="row mt-xl-5 mb-xl-5">
        <div class="col-md-6">
          <div class="card  ms-xl-5" style="max-width: 650px;height: 600px; ">
            <img src="https://tinyl.io/3uD5" class="card-img-top " alt="Simon Hryszko [Image]" height="300">
            <div class="card-body p-xl-4">
              <h2 class="card-title">Szymon Hryszko</h2>
              <p class="znaczniki pb-1">Hi! My name is Simon and I am teaching beckend. After you will be able to make static page I will show you how magicly move the page, how to page interact with user. My lessons are funny we laugh very much and I am doing my best to teach in friendly atmospthere!</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card  ms-xl-5" style="max-width: 650px;height: 600px;">
            <img src="" class="card-img-top " alt="Image" height="300">
            <div class="card-body p-xl-4">
              <h2 class="card-title">Piotr Miciak</h2>
              <p class="znaczniki">Hello I will teach you how to create websites in HTML &amp; CSS. You will learn how to create "Fire works" in JavaScript. What's more if you chose PhotoShop course we will prepare images for our websites and do a lot more. </p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    </div>
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