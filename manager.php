<!-- PHP logic -->
<?php
  session_start();
  echo isset($_SESSION['ID']);
  
  if(!isset($_SESSION['ID']))
    session_destroy();

  require_once("dbconnection.php");
  $connection = mysqli_connect($_server, $_login, $_pass, $_db);
  if(!$connection)
    $_SESSION['connectionError'] = true;

  else{
    // registration
    if(isset($_POST['rlogin'])){
      if(!preg_match("/^[a-zA-Z0-9]{3,50}$/m", $_POST['rlogin'])){
        $_SESSION['wrongRLogin'] = true;
      }
      
      elseif(!preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['rpass'])){
        $_SESSION['wrongRPass'] = true;
      }
      
      elseif(!preg_match("/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/i", $_POST['rmail'])){
        $_SESSION['wrongRMail'] = true;
      }

      else{
        $login = $_POST['rlogin'];
        $pass = password_hash($_POST['rpass'], PASSWORD_DEFAULT);
        $mail = $_POST['rmail'];

        $q = "SELECT login FROM _Users WHERE login = '$login' or mail = '$mail'";
        $result = mysqli_query($connection, $q);
        
        if(mysqli_num_rows($result) >= 1)
        {
          $row = mysqli_fetch_assoc($result);
          if($row['login'] == $login)
            $_SESSION['addingErrorLogin'] = true;
          else
            $_SESSION['addingErrorMail'] = true;
        }
        else {
          $q = "INSERT INTO _Users VALUES (NULL, '$login', '$pass', '$mail', 'u')";
          $query = mysqli_query($connection, $q);

          if($query)
            $_SESSION['registerSuccess'] = true;
          else
            $_SESSION['registerFailure'] = true;
          }
        }
      }
    
    //login
    if(isset($_POST['llogin'])){
      if(preg_match("/^[a-zA-Z0-9]{3,50}$/m", $_POST['llogin']) and preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['lpass'])){

        $login = $_POST['llogin'];
        $pass = $_POST['lpass'];
        
        $q = "SELECT * FROM _Users WHERE login = '$login'";
        $query = mysqli_query($connection, $q);
        $row = mysqli_fetch_assoc($query);
      
        if(mysqli_num_rows($query) != 1 or !password_verify($pass, $row['pass'])){
          $_SESSION['loginFailure'] = true;
        }
        else{
          $_SESSION['loginSuccess'] = true;
          $_SESSION['ID'] = $row['ID'];
          // TODO redirect to page after loged in
        }
      }
      else{
        $_SESSION['loginWrongInput'] = true;
      }
    }
  }
  mysqli_close($connection);
?>