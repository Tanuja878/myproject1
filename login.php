<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Doc Eagle - Login</title>
      <meta content="" name="description">
      <meta content="" name="author">
      <link rel="shortcut icon" href="images/favicon.png">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="css/metismenu.min.css" rel="stylesheet" type="text/css">
      <link href="css/icons.css" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <link href="css/theme.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="wrapper-page">
         <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
               <h4 class="font-20 m-b-5">Welcome Back !</h4>
               <p class="text-white-50 mb-4">Sign in to continue to Doc Eagle.</p>
               <a href="index.html" class="logo logo-admin">
               <img src="images/logo.svg" height="40" alt="logo"></a>
            </div>
            <div class="account-card-content">
               <form class="form-horizontal m-t-30" method="post" action="signin.php">
                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                     <label for="userpassword">Password</label>
                     <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter password">
                  </div>
                  <div class="form-group row m-t-20">
                     <div class="col-sm-6">
                        <div class="custom-control custom-checkbox" style="padding-top: 8px;">
                           <input type="checkbox" class="custom-control-input" id="customControlInline" name="customControlInline">
                           <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                     </div>
                     <div class="col-sm-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="submit" id="submit">Log In</button>
                     </div>
                  </div>
                  <div class="form-group m-t-10 mb-0 row">
                     <div class="col-12 m-t-20"><a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a></div>
                  </div>
               </form>
               <?php
          if(isset($_COOKIE['username']) and isset($_COOKIE['userpassword'])){
          $username = $_COOKIE['username'];
          $userpassword =  $_COOKIE['userpassword'];
          echo "<script>
                  document.getElementById('username').value = '$username';
                  document.getElementById('userpassword').value = '$userpassword';
               </script>";
         } 
     
        ?>
            </div>
         </div>
         <div class="m-t-40 text-center">
            <p>Don't have an account ? <a href="pages-register.html" class="font-500 text-primary">Signup now</a></p>
            <p>&copy; 2019 Doc Eagle, All rights reserved</p>
         </div>
      </div>
      <!-- end wrapper-page --><!-- jQuery  -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/metisMenu.min.js"></script>
      <script src="js/jquery.slimscroll.js"></script>
      <script src="js/waves.min.js"></script><!-- App js -->
      <script src="js/app.js"></script>
   </body>
</html>