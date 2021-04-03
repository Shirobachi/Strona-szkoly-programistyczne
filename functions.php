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
?>