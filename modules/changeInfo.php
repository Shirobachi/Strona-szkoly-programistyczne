<?php

  require_once(__DIR__ . "/.dbconnection.php");
  $connection = mysqli_connect($_server, $_login, $_pass, $_db);

  if(!$connection)
    $_SESSION['code'] = 'connectionError';
  elseif(isset($_POST['cnewPass']) || isset($_POST['coldPass'])){
    if(!preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['cnewPass']))
        $_SESSION['changeCode'] = 'wrongPassSyntax';

    elseif($_POST['coldPass'] == "")
      $_SESSION['changeCode'] = 'noOldPass';

    else {
      $q = "SELECT pass FROM _Users WHERE id = '$ID'";
      $result = mysqli_query($connection, $q);
      $row = mysqli_fetch_assoc($result);
      $pass = $row['pass'];
      
      if(!password_verify($_POST['coldPass'], $pass))
        $_SESSION['changeCode'] = 'wrongOldPass';
      else {
        $newHash = password_hash($_POST['cnewPass'], PASSWORD_DEFAULT);
        
        $q = "UPDATE _Users SET pass = '$newHash' WHERE ID = $ID";
        $result = mysqli_query($connection, $q);
        if($result)
          $_SESSION['code'] = 'dataChanged';
        else
          $_SESSION['code'] = 'connectionError';
      }
    }

    mysqli_close($connection);
  }
?>