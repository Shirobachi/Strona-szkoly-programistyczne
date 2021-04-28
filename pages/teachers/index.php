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
    <div class="container pt-5">

      <?php
        if($role == "u")
{
        $q = "SELECT * FROM _Users WHERE role = 'a'";
        $result = mysqli_query($connection, $q);


        echo '
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Login</th>
              <th scope="col">Mail</th>
              <th scope="col">Teacher of</th>
            </tr>
          </thead>
          <tbody>
        ';

        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
          $userID = $row['ID'];
          $userLogin = $row['login'];
          $userMail = $row['mail'];
          $userRole = $row['class'];
          $i++;

          echo
            "<tr>
              <th scope='row'>$i</th>
              <td>$userLogin</td>
              <td>
                <a class='text-decoration-none' href='mailto:$userMail?body=Dear%20$userLogin%2C%0D%0A%0D%0A%0D%0ARegard%20$login'>
                  $userMail
                </a>
              </td>

              <td>$userRole</td>
            </tr>";
        }

        echo '</tbody></table>';
}
      ?>

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