<?php

  session_start();
  session_destroy();
  
  session_start();
  $_SESSION['code'] = 'logout';

  header('Location: ../../pages/index/index.php');

?>