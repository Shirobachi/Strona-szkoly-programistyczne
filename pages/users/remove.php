<?php

  if(isset($_GET['id']))
  {
    require_once('../../modules/.dbconnection.php');

    $connection = mysqli_connect($_server, $_login, $_pass, $_db);
    
    $q = "DELETE FROM _Users WHERE ID = " . $_GET['id'];
    $result = mysqli_query($connection, $q);

    mysqli_close($connection);
  }

  header('location: index.php');

?>