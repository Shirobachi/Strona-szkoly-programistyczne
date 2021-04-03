<!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <i class="h1 bi bi-code-square"></i>
        </a>
        
      <!-- PHP notifications below -->
      <?php
        if(isset($_SESSION['code'])){
          $code = $_SESSION['code'];
          $notificationType = array(
            'connectionError' => 'danger', 
            'wrongRLogin' => 'warning', 
            'wrongRPass' => 'warning', 
            'wrongRMail' => 'warning', 
            'addingErrorLogin' => 'warning', 
            'addingErrorMail' => 'warning', 
            'registerSuccess' => 'success', 
            'registerFailure' => 'warning', 
            'loginFailure' => 'warning', 
            'loginSuccess' => 'success', 
          );
          
          $notificationTitle = array(
            'connectionError' => 'Connection failure!', 
            'wrongRLogin' => 'Wrong login input!', 
            'wrongRPass' => 'Wrong password input!', 
            'wrongRMail' => 'Wrong mail input!', 
            'addingErrorLogin' => 'Login is not free!', 
            'addingErrorMail' => 'Mail is not free!', 
            'registerSuccess' => 'New account made!', 
            'registerFailure' => 'Registration failure!', 
            'loginFailure' => 'Login failure!', 
            'loginSuccess' => 'Login success!', 
          );

          $notificationDesc = array(
            'connectionError' => 'We cannot connct to database, we working on it!', 
            'wrongRLogin' => 'Your login can consist of letters and/or digits b/w 3 and 50 chars', 
            'wrongRPass' => 'Your password should has b/w 6 and 50 chars and consist of letters and/or digits', 
            'wrongRMail' => 'This is not match to email pattern', 
            'addingErrorLogin' => 'This login belongs to someone else', 
            'addingErrorMail' => 'It looks like this mail is in our database, did you forgot you password?', 
            'registerSuccess' => 'Now you are free to log in!', 
            'registerFailure' => 'We stuggling with goblins who attaching our servers!', 
            'loginFailure' => 'This credentials not match to any record!', 
            'loginSuccess' => 'Now you are logged in!', 
          );

          echo "
          <div class='alert alert-".$notificationType["$code"]." alert-dismissible fade show' role='alert'>
            <strong>".$notificationTitle["$code"]."</strong> ".$notificationDesc["$code"]."
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>
          ";

          if($_SESSION['code'] == 'loginSuccess')
            unset($_SESSION['code']);
        }
        echo ">>" . $_SESSION['code'] . "<<" . isset($_POST['rlogin']) . "||";
      ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#smallNavbar">
          <span class="bi-menu-button"></span>
        </button>

        <div class="collapse navbar-collapse" id="smallNavbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link disabled">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link disabled">Offer</a></li>
            <li class="nav-item"><a href="#" class="nav-link disabled">Team</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            <li class="nav-item">
              
              <?php
                if(isset($_SESSION['ID']))
                  echo '<a href="logout.php"><button type="button" class="btn btn-success btn-lg">Log out!</button></a>';
                else
                  echo '<button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#sign_in">Sign in</button>';
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>