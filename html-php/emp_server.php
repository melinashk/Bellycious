<?php
session_start();

//initializing variables
$username="";
$email="";
$phone="";

$errors=array();

//connect to database
$dbase=mysqli_connect('localhost','root','','project');


  //admin login
        if(isset($_POST['login_emp'])){
            $username = mysqli_real_escape_string($dbase,$_POST['username']);
            $password = mysqli_real_escape_string($dbase,$_POST['password']);
            
    //error check in login
        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }
            
        if(count($errors) == 0){
            
            
            $query= "SELECT * FROM emp WHERE username='$username' AND password='".md5($password)."' LIMIT 1";
            $results= mysqli_query($dbase,$query) ;
            
            if(mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                header('location:emp_home.php');
            }
            else{
                array_push($errors,"Username and Password not matched");
            }
        
        }
    }
    
?>