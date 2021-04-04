<?php

  function classValidator($code){

    if(isset($_SESSION['code'])){
      if($code == "rlogin"){
        if($_SESSION['code'] == 'wrongRLogin' or $_SESSION['code'] == 'addingErrorLogin')
          echo 'is-invalid';
        elseif($_SESSION['code'] == 'wrongRPass' or $_SESSION['code'] == 'wrongRMail' or $_SESSION['code'] == 'addingErrorMail')
          echo 'is-valid';
      }

      elseif($code == "rpass"){
        if($_SESSION['code'] == 'wrongRPass')
          echo 'is-invalid';
      }

      if($code == "rmail"){
        if($_SESSION['code'] == 'wrongRMail' or $_SESSION['code'] == 'addingErrorMail')
          echo 'is-invalid';
        elseif($_SESSION['code'] == 'wrongRLogin' or $_SESSION['code'] == 'wrongRPass' or $_SESSION['code'] == 'addingErrorLogin')
          echo 'is-valid';
      }

      if($code == 'llogin'){
        if($_SESSION['code'] == 'loginFailure')
          echo 'is-invalid';
      }
    }
  }

  function navbarActiv($name){
    $req_uri = $_SERVER['REQUEST_URI'];
    $path = substr($req_uri,0,strrpos($req_uri,'/'));
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

    $wholePath = $path . '/' . $file;

    if($name == 'home' and $wholePath == '/pages/index/index.php')
    echo 'active';
    
    elseif($name == 'account' and $wholePath == '/pages/account/index.php')
    echo 'active';
  }

?>