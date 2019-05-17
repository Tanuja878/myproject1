<?php
$user = "Tanu";
$pwd = "unat";
if(isset($_POST['submit'])){
    //require 'config.php';
    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    if(empty($username) || empty($userpassword)){
       echo "enter username or password";
       exit();
    }
    
       else{
       
        if ($username == $user and $userpassword == $pwd) {
          if(isset($_POST["customControlInline"])) {
     
                setcookie('username', $username, time() + 84000);
                setcookie('userpassword', $userpassword, time() + 84000);
            }   
            
               session_start();
               $_SESSION['username']= $username;
                header("Location: homepage.php");
                //exit();
                   
        }
        else{
             echo "email or password invalide <br> click here to <a href='login.php'> try again </a>";
             }
       }//else

    }//if
?> 