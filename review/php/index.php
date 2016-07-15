<?php

include 'classes.php';
$form=new FormProcess;
$info="";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitSignUpForm'])) {
    
echo $form->signUp($_POST['username'], $_POST['fullname'], $_POST['password'], $_POST['email'], $_POST['gender'],$_POST['confirmpassword']);   
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitSignInForm'])) {
    echo $info=$form->signIn($_POST['username1'], $_POST['password1']); 
    
if($info=='log in successful'){
    include 'redirect.php';
    header('location: comments.php');
    
   
}

}
?>


<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8"/> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="/recordbreakers/review/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="/recordbreakers/review/css/semantic.min.css" type="text/css"/>
     <link rel="stylesheet" href="/recordbreakers/review/css/jquery-ui.css" type="text/css"/>
     <link rel="stylesheet" href="/recordbreakers/review/css/review.css" type="text/css"/>'
  </head>
  <body>
    <!-- top navbar-->
    <div class="navbar navbar-fixed-top navbar-default navcolor">
     <div class="container">
       <div class="navbar-header">
         <div class="navbar-brand">  
          <a href="#" class="brand">Students Review</a>
         </div> 
       </div>
       <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
       </button>
       <div class="collapse navbar-collapse navHeaderCollapse">
         <ul class="nav navbar-nav navbar-right navbar-justified">
           <li><a href="#register" data-toggle="modal" class="register">Register</a></li> 
           <li><a href="#signin" data-toggle="modal">Sign In</a></li> 
         </ul>  
       </div>
     </div> 
    </div>
      <! search field-->
    <div class="container">
      <div class="col-md-10">
        <form role="form">      
          <div class="input-group" id="searchIt">
             <input type="text" class="form-control" placeholder="Search Categories" id="search1" role="search">   <span class="input-group-btn">
                <button class="btn btn-primary" type="search" id="search" role="search">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
               </span>
          </div>
        </form>           
      </div>
    </div>
      <!--bottom navbar-->
    <div class="navbar navbar-default navbar-fixed-bottom botnav">
      
    </div>
      <!--sign up modal popup box-->
    <div class="modal fade modalmargin" id="register" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal" method="post">
             
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
             <h4 class="modal-title" id="registered">Sign Up</h4>  
            </div>  
            <div class="modal-body">
              <div class="form-group">
                <label for="register-name" class="col-lg-2 control-label">Name:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control control1" name="fullname" id="register-name" placeholder="Enter your full name" required autocomplete="on"/>  
                </div>
              </div>  
              <div class="form-group">
                <label for="register-username" class="col-lg-2 control-label">Username:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="register-username" name="username" placeholder="Enter a username" required autocomplete="on"/>  
                </div>
              </div>  
              <div class="form-group">
                <label for="register-email" class="col-lg-2 control-label">Email:</label>
                <div class="col-lg-10">
                  <input type="email" class="form-control" id="register-email" name="email" placeholder="Enter your email" required autocomplete="on"/>  
                </div>
              </div> 
              <div class="form-group">
                <label for="register-password" class="col-lg-2 control-label">Password:</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" name="password" id="register-password" placeholder="Enter a password" required autocomplete="off"/>  
                </div>
              </div>  
              <div class="form-group">
                <label for="register-password2" class="col-lg-2 control-label">Confirm password:</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" name="confirmpassword" id="register-password2" placeholder="Re-enter your password" required autocomplete="off"/>  
                </div>
              </div> 
             <div class="radio" id="radio1">
               <label for="register-radio1">
                  <input type="radio" name="gender" id="register-radio1" value="male" checked>
                   Male
               </label>
             </div>
             <div class="radio" id="radio2">
               <label for="register-radio2">
                  <input type="radio" name="gender" id="register-radio2" value="female">
                   Female
               </label>
             </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" name="submitSignUpForm" type="submit" id="register-submit">Register</button>
            </div>
          </form>
        </div>
      </div>  
    </div>
      <!--login modal popup box-->
            
    <div class="modal fade resize modalmargin2" id="signin" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
             <h4 class="modal-title" id="login">Sign In</h4>  
            </div>  
            <div class="modal-body">
              <div class="form-group col-lg-12">
                  <input type="text" class="form-control" id="signin-username" name="username1" placeholder="User Name" required autocomplete="off"/>  
              </div>  
              <div class="form-group col-lg-12">
                  <input type="password" class="form-control" id="sign-password" name="password1" placeholder="Password" required autocomplete="off"/>  
              </div>  
            </div>
              <div class="form-group">
                <button class="btn btn-primary btnlarge" name="submitSignInForm"  type="submit" id="signin-submit">Sign In</button>
              </div>
              <div class="form-group">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" role="checkbox" class="check2"/> Forgot Password? Remember me
              </div>
          </form>
        </div>
      </div>  
    </div>
      
     <script src="/recordbreakers/review/js/jquery-2.1.3.min.js" type="text/javascript"></script>
     <script src="/recordbreakers/review/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="/recordbreakers/review/js/review.js" type="text/javascript"></script>
  </body>
</html>


