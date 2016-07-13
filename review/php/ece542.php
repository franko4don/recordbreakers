<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password =test_input($_POST["password"]);
  $con=mysqli_connect("localhost","root","","Lecturer_Review");
// Check connection
$validate_connection=mysqli_connect_errno();
if ($validate_connection) {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

if(!usernameCheck($con, $username)){
    echo 'username doesnt exist';
}else{
    $array=mysqli_fetch(usernameCheck($con, $username));
    echo $array;
}
}

function usernameCheck($con,$username){
$select_user="select * from User where display_name='".$username."'";
$check_user=  mysqli_query($con, $select_user);

if(mysqli_num_rows($check_user) == 0){

   return false;
}else{

    return true;
} 
}

function passwordCheck($con,$password){
$select_user="select * from User where display_name='".$username."'";
$check_user=  mysqli_query($con, $select_user);

if(mysqli_num_rows($check_user) == 0){

   return false;
}else{

    return true;
} 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
