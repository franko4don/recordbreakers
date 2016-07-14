
<?php

class FormProcess extends DataBaseManage {

    function filterInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function signUp($username1, $fullname1, $password1, $email1, $gender1, $confirmpassword1) {
        $con = parent::connect();
        $values=new  DataProcess;
      
        
        $errors = array();
        $username = $this->filterInput($username1);
        $gender = $this->filterInput($gender1);
        $email = $this->filterInput($email1);
        $password = $this->filterInput($password1);
        $confirmpassword = $this->filterInput($confirmpassword1);
        $fullname = $this->filterInput($fullname1);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "E-mail is invalid");
        }
//checks if field is empty
        if (empty($username)) {
            array_push($errors, "firstname is required");
        }
//checks if field is empty
        if (empty($password)) {
            array_push($errors, "surname is required");
        }

        if (empty($confirmpassword)) {
            array_push($errors, "password confirmation is required");
        }
//checks if field is empty
        if (empty($fullname)) {
            array_push($errors, "full name is required");
        }
        if ($password != $confirmpassword) {
            array_push($errors, "passwords dont match");
        }

        if (count($errors) == 0) {
            $valuesarr=array();
            $password=md5($password);
            array_push($valuesarr, $username,$fullname,$email,$password,$gender); 
            
            $data=$values->dataInsertProcess("user" ,$valuesarr);
            
            if (parent::usernameCheck($con, $username) == true && parent::emailCheck($con, $email) == true) {
                
                if (parent::createUser($con,$data)) {
                    return "Account Succesfully created";
                } else {

                    return "Account not created";
                }
            } else {
                return 'username or email already exists<br> Account not created';
            }
        } else {
            print_r($errors);
        }
    }

    function signIn($username1, $password1) {
        $username = $this->filterInput($username1);
        $password = $this->filterInput($password1);
        $con = parent::connect();

        if (parent::usernameCheck($con, $username)) {
            echo 'username doesnt exist';
        } else {
            $exec = "select * from User where display_name='" . $username . "'";
            $result = mysqli_query($con, $exec);
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] == md5($password)) {
                echo 'log in successful';
            } else {
                echo 'Wrong password';
            }
        }
    }

}
?>





<?php

class DataBaseManage {

    function connect() {
        $con = mysqli_connect("localhost", "franko4don", "", "lecture_review");
// Check connection
        $validate_connection = mysqli_connect_errno();
        if ($validate_connection) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $con;
    }

    function createUser($con, $data) {
        
        $test = mysqli_query($con, $data);
        return $test;
    }

    function usernameCheck($con, $username) {
        $select_user = "select * from User where display_name='" . $username . "'";
        $check_user = mysqli_query($con, $select_user);

        if (mysqli_num_rows($check_user) == 0) {
            return true;
        } else {

            return false;
        }
    }

    function emailCheck($con, $email) {
        $select_email = "select * from User where email='" . $email . "'";
        $check_email = mysqli_query($con, $select_email);
        if (mysqli_num_rows($check_email) == 0) {

            return true;
        } else {

            return false;
        }
    }

}
?>





<?php

class Tasks {

    function create($tablename, $columns, $values) {
        
    }

    function delete() {
        
    }

}
?>




<?php

class DataProcess extends Tables {

    function dataInsertProcess($tablename,$values) {
        
        $insert = "INSERT INTO " . $tablename . " ( ";
        $array = parent::tablename($tablename);
        $length1 = count($array);
        
        for($i=0; $i<$length1; $i++){
            if($i==$length1-1){
             $insert.=$array[$i];   
            }else{
            $insert.=$array[$i].',';
            }
        }
        
        $insert.=") VALUES (";
        
       $length2=count($values);
        for($i=0; $i<$length2; $i++){
            if($i==$length2-1){
             $insert.="'".$values[$i]."'";   
            }else{
            $insert.="'".$values[$i]."'".',';
            }
        }
        
        

        return $insert.');';
    }

}


?>


<?php

// this class returns the column names of all the various tables in the data base
class Tables {

    function tablename($name) {
        
        switch ($name) {
            case "user": return $this->user();
            break;
       
            case "subthread": return $this->subthread();
            break;
            case "thread": return $this->thread();
            break;
            case "reaction":return $this->reaction();
            break;
            case "comment":return $this->comment();
            break;
            case "lecturer":return $this->lecturer();
            break;
            default : return array('Table doesnt exist');
        }
    }

     private function user() {
         
        $column = array();
        array_push($column, 'display_name');       
        array_push($column, 'full_name');      
        array_push($column, 'email');
        array_push($column, 'password');
        array_push($column, 'gender');
        return $column;
    }

    private function subthread() {
        $column = array();
        array_push($column, 'title');
        array_push($column, 'user_id');
        array_push($column, 'likes');
        array_push($column, 'dislikes');
        array_push($column, 'image');
        array_push($column, 'thread_id');
        array_push($column, 'story');
        return $column;
    }

    private function thread() {
        $column = array();
        array_push($column, 'title');
        array_push($column, 'reaction_id');
        array_push($column, 'description');
        array_push($column, 'thread_id');
        array_push($column, 'image');
        return $column;
    }

    private function reaction() {
        $column = array();
        array_push($column, 'title');
        array_push($column, 'image');
        return $column;
    }

    private function comment() {
        $column = array();
        array_push($column, 'user_id');
        array_push($column, 'thread_id');
        array_push($column, 'subthread_id');
        array_push($column, 'comment');
        array_push($column, 'image');
        return $column;
    }

    private function lecturer() {
        $column = array();
        array_push($column, 'name');
        return $column;
    }

}
?>


