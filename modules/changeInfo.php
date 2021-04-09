<?php

  require_once(__DIR__ . "/.dbconnection.php");

  $connection = mysqli_connect($_server, $_login, $_pass, $_db);

  if(!$connection)
    $_SESSION['code'] = 'connectionError';
  else{
    if(isset($_POST['coldPass'])){
      $q = "SELECT login FROM _Users WHERE mail = '$mail' and ID != '$ID'";
      $result = mysqli_query($connection, $q);
      $mailsCount = mysqli_num_rows($result);

      


    }
  }

?>