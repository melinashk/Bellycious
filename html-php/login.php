
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
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
            <h1>Login Here</h1>
           <div class="abc">
         
            <form method="post" action="login.php" class="fo">
         
            <p>Username :</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password :</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="login_user" value="LOGIN"><br>
            <a href="register.php">Don't have an account?</a><br><br>
            <a href="employee.php">Log in as Employee</a><br><br>
            <a href="alogin.php">Log in as Admin</a>
                <?php include('server.php') ?>
                   <?php include('errors.php'); ?>
               </form>
            
            </div>
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