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
    <!--<div class="container-fluid">-->
      <div class="container-fluid">
        <div>
          <h2 class="text-center mb-5 shadow-sm p-3">Contact with Us</h2>
        </div>
        <div class="row m-b-3">
          <div class="col-md-7 shadow rounded p-5">
            <form action="https://formsubmit.co/zeo95818@cuoly.com" method="POST">
              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">Surname</label>
                  <input type="text" class="form-control" placeholder="Surname" name="Surname">
                </div>
                <div class="col mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" placeholder="Name" name="Name">
                </div>

              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="Email">
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="Message" class="form-control" placeholder="Wrtie here your message" rows="10"></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div>
              <img id="zdj" class="img-fluid mx-auto d-block" src="../../sources/img/contact.png" height="500" width="500">
            </div>
          </div>
        </div>
        <?php include("../common/footer.php"); ?> 
      </div>
      
     
    <!--</div>-->

    <!-- Enable tultips -->
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
  </body>
</html>