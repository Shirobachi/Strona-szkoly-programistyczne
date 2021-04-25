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
        if($role == "a")

        $q = "SELECT * FROM _Users";
        $result = mysqli_query($connection, $q);


        echo '
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Login</th>
              <th scope="col">Mail</th>
              <th scope="col">Role</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
        ';

        while($row = mysqli_fetch_assoc($result)){
          $userID = $row['ID'];
          $userLogin = $row['login'];
          $userMail = $row['mail'];
          $userRole = $row['role'] == "u" ? "Student" : "Admin";


          echo
            "<tr>
              <th scope='row'>$userID</th>
              <td>$userLogin</td>
              <td>$userMail</td>
              <td>$userRole</td>
              <td>
                <a href='remove.php?id=$userID'>
                  <i style='color:red;' class='bi bi-person-x' data-bs-toggle='tooltip' data-bs-placement='top' title=\"Remove $userLogin's account!\"></i>
                </a>
                
                <a href='mailto:$userMail?body=Dear%20$userLogin%2C%0D%0A%0D%0A%0D%0A---%0D%0AWarm%20$login%0D%0AThe%20best%20programming%20school!%0D%0A'>
                  <i class='bi bi-envelope'></i>
                </a>

              </td>
            </tr>";
        }

        echo '</tbody></table>';

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