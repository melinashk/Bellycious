<?php include('server.php');?>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    </head>
    <body>
         <header>      
        <div class="left_area">
            <img src="photos/new.png" class="bellycious">
            <a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="mainmenu.php" class="act"><i class="fa fa-table" aria-hidden="true"></i><span>MENU</span></a>
            <a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>ABOUT US</span></a>
        </div>
        <div class="right_area">
            <a href="login.php"><span>LOGIN</span></a>
        </div>
    </header>
        <div class="loginbox">
        <img src="photos/user.png" class="log">
            <h1>Sign Up Here</h1>
           
           
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>
            <p>Username :</p>
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Username" required>
            <p>Email :</p>    
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Email" required>
            <p>Phone Number :</p>
            <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Enter Phone no." required>
            <p>Password :</p>
            <input type="password" name="password_1" placeholder="Enter Password" required>
            <p>Confirm Your Password :</p>
            <input type="password" name="password_2" placeholder="Confirm Password" required>
            <input type="submit" name="reg_user" value="REGISTER"><br>
            <a href="login.php">Already have an account?</a><br>
            </form>
         
        </div> 
        <div class="footer">
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
       <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <br>
    <div class="copyri">
            <p>&#169; 2020 THE BELLYCIOUS.The Rights Reserved</p>
            </div>
        </div>
    </body>
</html>