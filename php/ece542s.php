<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors=array();
  $username = filterInput($_POST["username"]);
  $gender = filterInput($_POST["gender"]);
  $email = filterInput($_POST["email"]);
  $password = filterInput($_POST["password"]);
  
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   array_push($errors,"E-mail is invalid");
}
//checks if field is empty
if(empty($username)){
    array_push($errors, "firstname is required");
}
//checks if field is empty
if(empty($password)){
    array_push($errors, "surname is required");
}
 

//checks if field is empty
if(empty($gender)){
    array_push($errors, "referralid is required");
}
  



  $con=mysqli_connect("localhost","franko4don","","details");
// Check connection
$validate_connection=mysqli_connect_errno();
if ($validate_connection) {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

if(count($errors)==0){
    if(usernameCheck($username)==0){
    if(insertData($con,$username,$email,$password,$gender)){
        echo "Account Succesfully created"; 
    }else{
        
        echo "Account not created";
    } 
}else{
    echo 'username already exists';
}
  
}else{
    echo count($errors).' errors';
    echo print_r($errors);
 
}


}


function filterInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function insertData($con,$username,$email,$password,$gender){
  $data="INSERT INTO table VALUES('.$username.','.$email.','.$password.','.$gender)";
  mysql_query($con,$data);
  if(usernameCheck($username)>=1){
      return true;
  }else{
     return false;
  }
  
}

function usernameCheck($username){
$select_user="select count(*) from table where username=".$username;
$check_user=  mysqli_query($con, $select_user);

if($check_user>=1){
    return 1;
}else{
  return 0;
}  
}


?>
