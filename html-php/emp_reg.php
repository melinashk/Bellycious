<?php include('emp_server.php') ?>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="admin_reg.css">
          </head>
    <body>
        <div class="loginbox">
        <img src="photos/user.jpg" class="log">
            <h1>Employee Register</h1>
           
            <form method="post" action="emp_reg.php">
            <?php include('errors.php'); ?>
            <p>Username</p>
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Username" required>
            <p>Email</p>
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Email" required>
            <p>Pin</p>
            <input type="password" name="password_1" placeholder="Enter Pin" required>
            <p>Confirm Pin</p>
            <input type="password" name="password_2" placeholder="Re-enter Pin" required>
            <input type="submit" name="emp_reg" value="Register"><br>
            <a href="account.php">Back to Panel?</a>
            </form>
           
        </div>  
    </body>
</html>