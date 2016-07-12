<?php
//declaration and initialization of variables to be used for form validation
  $surname=$firstname=$middlename=$referralid=$username=$password=$email=$phonenumber=$about=$confirmpassword="";
  
  //a function that alters the color of the asterix on the required fields
  function colorChange($color_value){
  $errormark='<span style="color:'.$color_value.' ">*</span>';
  return $errormark;
  }
  
  $warning=array(); //an array that holds the styling of the fields when there is a warning
  for($i=0; $i<8; $i++){
      array_push($warning, colorChange("#7373ff")); //fills up the array with default color values
  }
  

  $errors=array(); //creates an array that holds error information which arises as a result of what the user fills
  if ($_SERVER["REQUEST_METHOD"] == "POST") {   //executes if submit button is clicked and the method for form posting is "post"
  $surname = test_input($_POST["surname"]);
  $firstname = test_input($_POST["firstname"]);
  $middlename = test_input($_POST["middlename"]);
  $referralid = test_input($_POST["referralid"]);
  $gender = test_input($_POST["sex"]);
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  $phonenumber = test_input($_POST["phonenumber"]);
  $about = test_input($_POST["about"]);
  $confirmpassword = test_input($_POST["confirmpassword"]);
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   array_push($errors,"E-mail is invalid");
   $warning[5]=colorChange("red");
}
//checks if field is empty
if(empty($firstname)){
    array_push($errors, "firstname is required");
    $warning[1]=colorChange("red");
}
//checks if field is empty
if(empty($surname)){
    $warning[0]=colorChange("red");
    array_push($errors, "surname is required");
}
 //checks if field is empty 

//checks if field is empty
if(empty($referralid)){
    $warning[2]=colorChange("red");
    array_push($errors, "referralid is required");
}
//checks if field is empty
if(empty($username)){
    $warning[3]=colorChange("red");
    array_push($errors, "username is required");
}
//checks if field is empty
if(empty($password)){
    $warning[4]=colorChange("red");
    array_push($errors, "password is required");
}
//checks if field is empty or whether the value matches a pattern
if(empty($phonenumber)){
    array_push($errors, "Phone number is required");
    $warning[6]=colorChange("red");
}else{
    if(substr($phonenumber,0,1)!="0" ||  strlen($phonenumber)!=11){
        array_push($errors, "Wrong Phone number");
        $warning[6]=colorChange("red");
    }
}

if($password!=$confirmpassword){
   array_push($errors, "Password mismatch"); 
   $warning[6]=colorChange("red");
}
//checks for number of errors on the array
if(count($errors)==0){
    echo 'Succesful';
  
}else{
    echo count($errors).' errors';
    echo print_r($errors);
 
}
}
//trims data, removes unnecessary characters and returns pure data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
             Network Registration
         </title>
        
         </head>
         <body >
              <h1 style="text-align: center">RECORD BREAKERS INT'L</h1>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-2">
                          
                      </div>
                      <div class="col-sm-9" style="padding-top: 1%;">
                         
                         
                          <form style="width: 70%; padding-left: 15%;" class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                             
                              <div class="form-group">
                                  <label for="marked" style="color: #7373ff">Fields marked * are required<br> Fields marked <span style="color: red">*</span> contain errors</label>
                              
                              </div>
                              
                              <div class="form-group">
                              <label for="Surname" style="color: #7373ff">Surname <?php echo $warning[0]?></label>
                              <input type="text" value="<?php echo $surname?>"  name="surname" class="form-control" id="surname" placeholder="Enter Surname">
                              </div>
                              
                              <div class="form-group">
                              <label for="Firstname" style="color: #7373ff">Firstname <?php echo $warning[1]?></label>
                              <input type="text" value="<?php echo $firstname?>"  name="firstname" class="form-control" id="firstname" placeholder="Enter First name" >
                              </div>
                              
                              <div class="form-group">
                              <label for="Middlename" style="color: #7373ff">Middlename</label>
                              <input type="text" value="<?php echo $middlename?>" name="middlename" class="form-control" id="middlename" placeholder="Enter Middle name">
                              </div>
                              
                              <div class="form-group">
                              <label for="Referral ID"  style="color: #7373ff">Referral ID <?php echo $warning[2]?></label>
                              <input type="text" value="<?php echo $referralid?>" name="referralid" class="form-control" id="referralid" placeholder="Enter Referral ID" >
                              </div>
                              
                              <div class="form-group">
                              <label for="Username" style="color: #7373ff">Username <?php echo $warning[3]?></label>
                              <input type="Username" value="<?php echo $username?>" name="username" class="form-control" id="username" placeholder="Enter Username">
                              </div>
                              
                              <div class="form-group">
                                  <label for="Password" style="color: #7373ff">Password <?php echo $warning[4]?></label>
                              <input type="Password" value="<?php echo $password?>" name="password" class="form-control" id="password" placeholder="Enter Password" >
                              </div>
                              
                              <div class="form-group">
                                  <label for="ConfirmPassword" style="color: #7373ff">Confirm Password <?php echo $warning[7]?></label>
                              <input type="Password" value="<?php echo $password?>" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="confirm Password" >
                              </div>
                              
                              <div class="form-group">
                              <div class="radio" >
                                  
                                  <label class="radio-inline" style="color: #7373ff"><input type="radio" value="male" name="sex" id="male" checked> Male</label>
                                  <label class="radio-inline" style="color: #7373ff"><input type="radio"  value="female" name="sex" id="female"> Female</label>
                              </div>
                              
                              </div>
                              
                              <div class="form-group">
                                  <label for="email" style="color: #7373ff">E-mail <?php echo $warning[5]?></label>
                              <input type="text" value="<?php echo $email?>" name="email" class="form-control" id="email" placeholder="Enter your E-mail" >
                              </div>
                              
                              <div class="form-group">
                                  <label for="phonenumber" style="color: #7373ff">Phone Number <?php echo $warning[6]?></label>
                              <input type="text" value="<?php echo $phonenumber?>" name="phonenumber" class="form-control" id="phone" placeholder="Enter your Phone no" >
                              </div>
                              
                              <div class="form-group">
                                  <label for="about" style="color: #7373ff">About (optional)</label>
                                  <textarea name="about" class="form-control" rows="7" id="about" placeholder="Describe yourself in few sentences"><?php echo $about?></textarea>
                              </div>
                              
                              <div class="form-group">                
                                  <button type="submit"  class="btn btn-primary">Submit</button>  
                              </div>
                              
                              </div>
                              
                              
                              
                              
                          </form>
                              </div>
                      
                      <div class="col-sm-1">
                          
                      </div>
                        
                      </div>
                      
                      
                      
                  </div>
 </body>
 </html>

