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
<a href="https://github.com/Shirobachi/AWWW-project" target="_blank" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#fff; color:#151513; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="">
          <span class="bi-menu-button"></span>
        </button>

        <div class="collapse navbar-collapse" id="smallNavbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="../index/index.php" class="nav-link <?php navbarActiv('home'); ?>">Home</a></li>
            <li class="nav-item"><a href="../contact/index.php" class="nav-link <?php navbarActiv('contact'); ?>">Contact</a></li>
            <li class="nav-item"><a href="../offer/index.php" class="nav-link <?php navbarActiv('offer'); ?>">Offer</a></li>
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