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
      <div class="container-fluid">
        <div>
          <h1 class="text-center mb-5 shadow p-5 display-1">Contact with Us</h1>
        </div>
        <div class="row m-b-3">
          <div class="col-md-12 shadow-lg rounded p-5">
            <form action="https://formsubmit.co/alt.j9-couzt768@yopmail.com" method="POST">
              <div class="row">
                <div class="col mb-3">
                  <label class="form-label display-6">Surname</label>
                  <input type="text" class="form-control" placeholder="Surname" name="Surname">
                </div>
                <div class="col mb-3">
                  <label class="form-label display-6">Name</label>
                  <input type="text" class="form-control" placeholder="Name" name="Name">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label display-6">Email</label>
                <input type="email" class="form-control" placeholder="name@email.com" name="Email">
              </div>
              <div class="mb-3">
                <label class="form-label display-6">Message</label>
                <textarea name="Message" class="form-control" placeholder="Wrtie here your message" rows="10"></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Send</button>
              </div>
            </form>
          </div>
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