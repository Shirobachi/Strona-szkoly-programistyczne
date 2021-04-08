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