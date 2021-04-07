<?php 
  require_once(__DIR__ . "/../../modules/manager/manager.php"); 
  require_once(__DIR__ . "/../../modules/functions.php"); 
?>
    
<!-- Modal Registration -->
<!-- Modal login -->
<div class="modal fade" id="sign_in" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <form method="post">
                <input required type="text" class="form-control <?php classValidator('rlogin')?>" name="rlogin" placeholder="Username" value="<?php echo (isset($_POST['rlogin']) and $_SESSION['code'] != 'registerSuccess') ? $_POST['rlogin'] : "" ?>"/>
                <input required type="password" class="form-control <?php classValidator('rpass')?>" name="rpass" placeholder="Password"/>
                <input required type="email" class="form-control <?php classValidator('rmail')?>" name="rmail" placeholder="Email"  value="<?php echo (isset($_POST['rmail']) and $_SESSION['code'] != 'registerSuccess') ? $_POST['rmail'] : "" ?>"/>

                <div id="emailHelp" class="form-text my-2">We'll never share your email with anyone else.</div>
                <button type="button btn-lg" class="btn btn-outline-success">Create account</button>
              </form>
            </div>
            
            <div class="col-6">
              <form method="post">
                <input required type="text" class="form-control <?php classValidator('llogin') ?>" name="llogin" placeholder="Username" value="<?php echo isset($_POST['llogin']) ? $_POST['llogin'] : "" ?>"/>
                <input required type="password" class="form-control" name="lpass" placeholder="Password"/>

                <div id="emailHelp" class="form-text my-2">By log-in you agree that we're the best!</div>
                <button type="button btn-lg" class="btn btn-outline-success">Log in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
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
              'loginFailure' => 'warning', 
              'loginSuccess' => 'success', 
              'notLoggedIn' => 'warning', 
              'logout' => 'success', 
            );
            
            $notificationTitle = array(
              'connectionError' => 'Connection failure!', 
              'wrongRLogin' => 'Wrong login input!', 
              'wrongRPass' => 'Wrong password input!', 
              'wrongRMail' => 'Wrong mail input!', 
              'addingErrorLogin' => 'Login is not free!', 
              'addingErrorMail' => 'Mail is not free!', 
              'registerSuccess' => 'New account made!', 
              'loginFailure' => 'Login failure!', 
              'loginSuccess' => 'Login success!', 
              'notLoggedIn' => 'You are not logged in!', 
              'logout' => 'Logged out!', 
            );

            $notificationDesc = array(
              'connectionError' => 'We stuggling with goblins who attaching our servers!', 
              'wrongRLogin' => 'Your login can consist of letters and/or digits b/w 3 and 50 chars', 
              'wrongRPass' => 'Your password should has b/w 6 and 50 chars and consist of letters and/or digits', 
              'wrongRMail' => 'This is not match to email pattern', 
              'addingErrorLogin' => 'This login belongs to someone else', 
              'addingErrorMail' => 'It looks like this mail is in our database, did you forgot you password?', 
              'registerSuccess' => 'Now you are free to log in!', 
              'loginFailure' => 'This credentials not match to any record!', 
              'loginSuccess' => 'Now you are logged in!', 
              'notLoggedIn' => 'To see that page you need to be logged in!', 
              'logout' => 'We already missed you!', 
            );

            echo "
            <div class='alert alert-".$notificationType["$code"]." alert-dismissible fade show' role='alert'>
              <strong>".$notificationTitle["$code"]."</strong> ".$notificationDesc["$code"]."
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";

            unset($_SESSION['code']);
          }
        ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="">
          <span class="bi-menu-button"></span>
        </button>

        <div class="collapse navbar-collapse" id="smallNavbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="../index/index.php" class="nav-link <?php navbarActiv('home'); ?>">Home</a></li>
              <?php 
                if(isset($_SESSION['ID'])){
                  echo '<li class="nav-item"><a href="../account/index.php" class="nav-link ';
                  navbarActiv("account");
                  echo '">Account</a></li>';
                }
                if(isset($_SESSION['ID']))
                  echo '<li class="nav-item"><a href="../../modules/manager/logout.php"><button type="button" class="btn btn-success btn-lg">Log out!</button></a></li>';
                else
                  echo '<button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#sign_in">Sign in</button>';
              ?>
          </ul>
        </div>
      </div>
    </nav>