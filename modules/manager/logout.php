<?php

  session_start();
  session_destroy();
  
  session_start();
  $_SESSION['logout'] = true;

  header('Location: ../../pages/index/index.php');

?>