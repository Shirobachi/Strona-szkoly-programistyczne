<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../../sources/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Kursy dla programistów</title>
  </head>
  <body class="bg-dark text-light">

  <?php
    session_start();

    if(!isset($_SESSION['ID'])){
      $_SESSION['code'] = 'notLoggedIn';
      echo $_SESSION['code'];
      header('Location: ../index/index.php');
      die();
    }

    ?>
    <?php require("../common/navbar.php"); ?>
    <?php //include("../common/slider.php"); ?>

    <div class="container-fluid bg-light text-dark">
      <div class="row text-center padding">

        <?php require('leftmenu.php'); ?>

        <div class="col-12 col-md-9">

          <?php

          </form>
        </div>
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