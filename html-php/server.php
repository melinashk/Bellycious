<?php
session_start();

//initializing variables
$username="";
$email="";
$phone="";


$errors=array();

//connect to database
$db=mysqli_connect('localhost','root','','project');

//register user
if(isset($_POST['reg_user'])){
    //recieve input  values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone= mysqli_real_escape_string($db,$_POST['phone']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
    //form validation :: by adding (array_push())  corresponding error into $errors array
    
    if($password_1 != $password_2) {
        array_push($errors, "Passwords do not match");
    }

    //check if the user with same data exists
    $user_check_query="SELECT * FROM `user` WHERE username='$username' OR email='$email' OR phone='$phone' LIMIT 1";
    $result= mysqli_query($db, $user_check_query) or die();
    $user= mysqli_fetch_assoc($result);
    
    if($user){ //if user exists
        
        if($user['email'] === $email){
            array_push($errors, "Email already exists");
        }
        
    }

    //register users if no errors exist
        if(count($errors) == 0) {
       
            $query="INSERT INTO user (username,email,phone,password) VALUES('$username','$email','$phone','".md5($password_1)."')";
            $order_query="INSERT INTO ordering (username,email,phone) VALUES('$username','$email','$phone')";
            $result=mysqli_query($db,$query);
            $order_result=mysqli_query($db,$order_query);
            if($result){
                header('Location:login.php');		
            }
            if($order_result){
                echo "";
            }
    }
}


    //LOGIN USER
    if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($db , $_POST['username']);
        $password = mysqli_real_escape_string($db , $_POST['password']);
        
        //errors check in login
        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
           
            $query="SELECT * FROM `user` WHERE username='$username' AND password='".md5($password)."' LIMIT 1";
            $results= mysqli_query($db , $query);
           
            if(mysqli_num_rows($results)==1){
                 $_SESSION['username'] = $username;
                header('location:userhomepage.php');
            }
         else{
                array_push($errors,"Wrong details");
            }
        }
    
    }

?>
