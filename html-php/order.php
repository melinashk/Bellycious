<html>
<head>
    <title>Ordering</title>
    <link rel="stylesheet" type="text/css" href="cssor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    
</head>
<body>
    <header>
    <div class="left_area">
        <img src="photos/new.png" class="bellycious">
        <a href="userhomepage.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
        <a href="order.php" class="act"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>ORDER</span></a>
        <a href="booking.php"><i class="fa fa-check-circle" aria-hidden="true"></i><span>BOOKING</span></a>
        <a href="feedbackadd.php"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK</span></a>
        </div>
        <div class="right_area">
        <a href="homepage.php"><span>LOGOUT</span></a>
        </div>
         </header>
    
    <?php
        
        if(isset($_POST['send']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $food=$_POST['food'];
            $quan=$_POST['quantity'];
            $oconfirm=$_POST['oconfirm'];
            $connection=mysqli_connect("localhost","root","","project");
            
            $query="INSERT INTO ordering VALUES('','$name','$email','$contact','$food','$quan','$oconfirm')";
           $query_run=mysqli_query($connection,$query);
            
            if($query_run)
            {
                echo "<div class='mila'>We will contact you soon for confirmation</div>";
                
            }
        }

    ?>
    
    
    <div class="order"><img src="order2.jpg" class="log">
     <form action="#" target="_self" method="post">
         <h4>Place Your Order</h4>
            <div class="order-form">
                <p>Name:</p><br><input type="text" name="name" placeholder="Your Name" size="35"><br><br>
                <p>Email:</p><br><input type="email" name="email" placeholder="Your Email" size="35"><br><br>
                <p>Contact Number:</p><br><input type="tel" name="contact" placeholder="Your Number" size="35"><br><br>
                <div class="t">
                <p>Food Items:</p><br>
                
                <select name="food" required>
                        <option value="">---Select your food---</option>
                           <?php
                         $connection=mysqli_connect("localhost","root","","project");
                        $query="SELECT * FROM `menu` ORDER BY name desc";
                        $query_run=mysqli_query($connection,$query);
                        if($query_run)
                        {
                            while($row=mysqli_fetch_array($query_run))
                            {
                                ?>
                            <option><?php echo $row['name'];?></option>
                                <?php
                            }
                        }
                    
                    ?>
                </select>
                <br>
                <br>    
                <p>Quantity:</p><br>
                <select name="quantity" required>
                        <option value="">---Select Quantity--- </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        
                </select><br><br><br>
                <input type="hidden" name="oconfirm" value="Not Confirmed">
                </div>
                
                <input type="submit" name="send" value="SUBMIT">
            </div>
            
            
         
         
    </form>
    </div>
    <div class="herna">
         <p>If you want to view the details of your order <span class="ya"><a href="showorder.php">Click Here</a></span></p>
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


