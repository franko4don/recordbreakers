<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password =test_input($_POST["password"]);
  
  $con=mysqli_connect("localhost","franko4don","","details");
// Check connection
$validate_connection=mysqli_connect_errno();
if ($validate_connection) {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

$select_user="select count(*) from table where username=".$username;
$check_user=  mysqli_query($con, $select_user);
if($check_user==0){
    echo "username doesn't exists";
}else{
   $password_get=  mysqli_query($con,'select count(*) from table where username='.$username.'AND password='.$password); 
   if($password_get==1){
       header("location: /");
   }else{
       echo 'wrong username or password';
   }
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
