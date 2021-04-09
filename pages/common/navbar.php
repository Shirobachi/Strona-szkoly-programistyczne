<?php 
  require_once(__DIR__ . "/../../modules/manager.php"); 
  require_once(__DIR__ . "/../../modules/changeInfo.php"); 
  require_once(__DIR__ . "/../../modules/functions.php"); 
?>

<!-- Modal Registration and login -->
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
                <input type="submit" class="btn btn-lg btn-outline-success" value="Create account"/>
              </form>
            </div>
            
            <div class="col-6">
              <form method="post">
                <input required type="text" class="form-control <?php classValidator('llogin') ?>" name="llogin" placeholder="Username" value="<?php echo isset($_POST['llogin']) ? $_POST['llogin'] : "" ?>"/>
                <input required type="password" class="form-control" name="lpass" placeholder="Password"/>

                <div id="emailHelp" class="form-text my-2">By log-in you agree that we're the best!</div>
                <input type="submit" class="btn btn-lg btn-outline-success" value="Log in"/>
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

<?php 
  if(isset($ID) and isset($_SESSION['changeCode'])){
    echo"
      <script type='text/javascript'>
        $(window).on('load', function() {
          $('#changeInfo').modal('show');});
      </script>";

      $notificationChangeType = array(
        'wrongMailSyntax' => 'danger',
        'mailExist' => 'warning'
      );

      $notificationChangeTitle = array(
        'wrongMailSyntax' => 'Wrong mail pattern!',
        'mailExist' => 'This mail is assigned to someone else..'
      );
    }
?>

<!-- Modal change personal information -->
<div class="modal fade" id="changeInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changeInfoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeInfoLabel">Change personal information!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <?php if(isset($ID)){
        if(isset($_SESSION['changeCode'])){
          $changeCode = $_SESSION['changeCode'];
          
          echo '
          <div class="alert alert-'.$notificationChangeType["$changeCode"].' alert-dismissible fade show" role="alert">
          <strong>'.$notificationChangeTitle["$changeCode"].'</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          ';
        }

        echo "
        <form id='changeInfoForm' method='post'>
          <input class='form-control' type='text' disabled value='$login'>
          <input class='form-control' name='cmail' type='email' placeholder='New mail' value='$mail'>
          <input class='form-control' name='cnewPass' type='password' placeholder='New password' data-bs-toggle='tooltip' data-bs-placement='top' title='Keep empty if not wish to change'>
          <input class='form-control' name='coldPass' type='password' placeholder='Old password'>
        </form>
        ";
    
      }?>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="changeInfoForm" class="btn btn-primary">Change</button>
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
            <li class="nav-item"><a href="../contact/index.php" class="nav-link <?php navbarActiv('contact'); ?>">Contact</a></li>
              <?php
                if(isset($_SESSION['ID']))
                  echo "
                  <li class='nav-item'>
                    <div class='mt-1 dropdown'>
                      <a class='btn btn-success btn-lg dropdown-toggle' role='button' id='userMenu' data-bs-toggle='dropdown'>
                        Hi, $login
                      </a>

                      <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='userMenu'>
                        <li><a class='dropdown-item' href='#' data-bs-toggle='modal' data-bs-target='#changeInfo'>Change personal information</a></li>
                        <!-- <li><a class='dropdown-item' href='#'>Change personal information</a></li> -->
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='../../modules/logout.php'>Logout!</a>
                      </ul>
                    </div>
                  </li>
                  ";
                else
                  echo '
                  <li class="nav-item">
                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#sign_in">Sign in!</button>
                  </li>
                  ';
              ?>

          </ul>
        </div>
      </div>
    </nav>