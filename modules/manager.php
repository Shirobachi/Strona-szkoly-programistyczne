<?php

  session_start();
  
  ini_set('display_errors', '1');
  error_reporting(E_ALL);
  
  require_once(__DIR__ . "/.dbconnection.php");
  $connection = mysqli_connect($_server, $_login, $_pass, $_db);

  if(!$connection)
    $_SESSION['code'] = 'connectionError';
  else{
    //registration
    if(isset($_POST['rlogin'])){
      if(!preg_match("/^[a-zA-Z0-9]{3,50}$/m", $_POST['rlogin'])){
        $_SESSION['code'] = 'wrongRLogin';
      }//not good login
      
      elseif(!preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['rpass'])){
        $_SESSION['code'] = 'wrongRPass';
      }//not good pass
      
      elseif(!preg_match("/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/i", $_POST['rmail'])){
        $_SESSION['code'] = 'wrongRMail';
      }//not good mail

      else{
        $login = $_POST['rlogin'];
        $pass = password_hash($_POST['rpass'], PASSWORD_DEFAULT);
        $mail = $_POST['rmail'];

        $q = "SELECT login FROM _Users WHERE login = '$login' or mail = '$mail'";
        $result = mysqli_query($connection, $q);

        //someone alredy registred with same login or mail
        if(mysqli_num_rows($result) >= 1){
          $row = mysqli_fetch_assoc($result);

          if($row['login'] == $login)
            $_SESSION['code'] = 'addingErrorLogin';
          else
            $_SESSION['code'] = 'addingErrorMail';
        }//if some same login/mail
        else{
          $q = "INSERT INTO _Users VALUES (NULL, '$login', '$pass', '$mail', 'u')";
          $query = mysqli_query($connection, $q);

          if($query)
            $_SESSION['code'] = 'registerSuccess';
          else
            $_SESSION['code'] = 'registerFailure';
        }//else (adding new user to DB)
      }
    }//if isset rlogin

    //loginning in
    elseif(isset($_POST['llogin'])){
      //if login and pass has not danger chars (and fit to login and pass pattern)
      if(preg_match("/^[a-zA-Z0-9]{3,50}$/m", $_POST['llogin']) and preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['lpass'])){
        $login = $_POST['llogin'];
        $pass = $_POST['lpass'];

        $q = "SELECT * FROM _Users WHERE login = '$login'";
        $query = mysqli_query($connection, $q);
        $row = mysqli_fetch_assoc($query);

        //if returned no 1 record(s) (so 0 or > 1 (what should not happened)) or pass not match to hash from db
        if(mysqli_num_rows($query) != 1 or !password_verify($pass, $row['pass']))
          $_SESSION['code'] = 'loginFailure';
        else{
          $_SESSION['code'] = 'loginSuccess';
          $_SESSION['ID'] = $row['ID'];
          // TODO redirect to page after loged in
        }
      }//if good login and pass
      //if some put some danger chars in login/pass field
      else {
        $_SESSION['code'] = 'loginFailure';
      }
    }//if isset llogin

    if(isset($_SESSION['ID'])){
      $ID = $_SESSION['ID'];
      
      $q = "SELECT * FROM _Users WHERE ID = '$ID'";
      $result = mysqli_query($connection, $q);
      $row = mysqli_fetch_assoc($result);

      $login = $row['login'];
      $mail = $row['mail'];
      $role = $row['role'];
    }//isset(SESSION.id)

    mysqli_close($connection);
  }//if connection is good
?>