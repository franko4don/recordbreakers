<?php
session_start();
include 'session.php';
if(isset($_SESSION['id'])){
    header('location: /recordbreakers/php/network-dash-board.php');
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {    
  $username = $_POST["username"];
  $password =$_POST["password"];
  $_SESSION['id']='logger';
  header('Location: /recordbreakers/php/network-dash-board.php?id='.session_id());
}

?>
<!DOCTYPE.html>
 <html>
     <head>
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link href="/recordbreakers/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="/recordbreakers/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>
        <script src="/recordbreakers/bootstrap/js/bootstrap.min.js"></script>
         <title>
             Network
         </title>
        
         </head>
         <body >
              <h1 style="text-align: center">RECORD BREAKERS INT'L</h1>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-2">
                          
                      </div>
                      
                      <div class="col-sm-8">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-4" style="padding-top: 20%">
                          <form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                              <div class="form-group">
                              <label for="Username" style="color: #7373ff">Username</label>
                              <input type="Username" name="username" class="form-control" id="username" placeholder="Enter Username">
                              </div>
                              
                              <div class="form-group">
                                  <label for="Password" style="color: #7373ff">Password</label>
                              <input type="Password" name="password" class="form-control" id="password" placeholder="Enter Password">
                              </div>
                              
                              <div class="form-group">
                                  <div class="checkbox">
                                      <label><input type="checkbox" value="yes" name="remember">Keep me signed in</label>
                              </div>
                              </div>
                              
                              <div class="form-group">
                                  
                                  <label style="font-weight: lighter; word-spacing: 20%;">No account yet?  <a href="/recordbreakers/php/network-sign-up.php">sign up</a></label>
                             
                              </div>
                              
                              <div class="form-group">                
                                  <button type="submit"  class="btn btn-primary">Sign in</button>  
                              </div>
                              
                              <div class="form-group">                
                                  <a href="/recordbreakers/php/password-recovery.php">forgot password?</a> 
                              </div>
                              
                          </form>
                              </div>
                          <div class="col-sm-4"></div>
                      </div>
                      
                      <div class="col-sm-2">
                          
                      </div>
                      
                  </div>
              </div>
<?php

?>
