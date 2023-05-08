<!DOCTYPE html>
<html>
 <head>
     <title>Feed Back</title>
        <link rel="stylesheet" type="text/css" href="cssfb.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
 </head>
<body>
    <header>
    <div class="left_area">
        <img src="photos/new.png" class="bellycious">
        <a href="userhomepage.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
        <a href="order.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>ORDER</span></a>
        <a href="booking.php"><i class="fa fa-check-circle" aria-hidden="true"></i><span>BOOKING</span></a>
        <a href="feedbackadd.php" class="act"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK</span></a>
        </div>
        <div class="right_area">
        <a href="homepage.php"><span>LOG OUT</span></a>
        </div>
        </header>
    <div class="feed"><img src="photos/fblogo1.jpg" class="log">
            <h4>Feedback</h4>
        <form action="#" target="_self" method="post">
            <div class="fed-form">
            <p>Name:</p><br><input type="text" name="name" placeholder="Your Name" size="34"><br><br>
            <p>Email:</p><br><input type="email" name="email" placeholder="Your Email" size="34"><br><br>
            <p>Contact Number:</p><br><input type="tel" name="number" placeholder="Your Number" value size="34"><br><br>
                <p>Feel free to be specific:</p><br><textarea type="text" name="message" placeholder="Your Comments" rows="20" cols="20"></textarea>
                <span><input type="submit" name="submit" value="Submit"></span>
                <span><input type="reset" name="cancel" value="Cancel"></span>
            </div>
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
    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['number'];
            $message = $_POST['message'];
            
            $connection= mysqli_connect("localhost","root","","project");
                        
            $query="INSERT INTO feedback VALUES('','$name','$email','$contact','$message')";
            $result=mysqli_query($connection,$query);
            
            if($result)
            {
               echo "";
            }
            
        }
    ?>
   
</body>
</html>