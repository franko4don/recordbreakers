<?php

class FormProcess {

    function filterInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function signUp($username1, $fullname1, $password1, $email1, $gender1, $confirmpassword1) {
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


        $con = mysqli_connect("localhost", "franko4don", "", "lecture_review");
// Check connection
        $validate_connection = mysqli_connect_errno();
        if ($validate_connection) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        if (count($errors) == 0) {
            if ($this->usernameCheck($con, $username) == true && $this->emailCheck($con, $email) == true) {
                if ($this->insertData($con, $username, $fullname, $email, md5($password), $gender)) {
                    return "Account Succesfully created";
                } else {

                    return "Account not created";
                }
            } else {
                return 'username or email already exists<br> Account not created';
            }
        } else {

            return print_r($errors);
        }
    }

    function insertData($con, $username, $fullname, $email, $password, $gender) {
        $data = "INSERT INTO User(display_name,full_name,email,password,gender) VALUES('$username','$fullname','$email','$password','$gender')";
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

    function signIn($username1, $password1) {
        $username = $this->filterInput($username1);
        $password = $this->filterInput($password1);
        $con = mysqli_connect("localhost", "franko4don", "", "lecture_review");
// Check connection
        $validate_connection = mysqli_connect_errno();
        if ($validate_connection) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        if (!$this->usernameCheck2($con, $username)) {
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

    function usernameCheck2($con, $usernamel) {
        $select_user = "select * from User where display_name='" . $usernamel . "'";
        $check_user = mysqli_query($con, $select_user);

        if (mysqli_num_rows($check_user) == 0) {

            return false;
        } else {

            return true;
        }
    }

}?>


<?php
class Tasks{
    
    function create($tablename,$columns,$values){
        
    }
    
}
?>


<?php


?>
