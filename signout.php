<?php
  session_start();
  session_destroy();
  if(isset($_COOKIE['username']) and isset($_COOKIE['userpassword'])){
          $username = $_COOKIE['username'];
          $userpassword =  $_COOKIE['userpassword'];
          setcookie('username',$username, time()-1);
          setcookie('userpassword', $userpassword, time()-1);
       }
  echo "logout sucessfully click here to <a href='login.php'> LOGIN again </a>";
 ?>