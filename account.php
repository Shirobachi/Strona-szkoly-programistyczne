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
  <body class="bg-dark text-light">
    <?php require_once("_navbar.php"); 
      if(!isset($_SESSION['ID']))
        header('Location: index.php');
    ?>

    <!-- 3 column section -->
    <div class="container-fluid">
      <div class="row text-center padding bg-light">

        <?php require('common/account/leftmenu.php'); ?>

        <div class="col-12 col-md-9">

          

        </div>

      </div>

    <?php require_once("_footer.php"); ?>

    <!-- Enable tultips -->
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

  </body>
</html>