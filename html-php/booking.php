<html>
<head>
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="cssbook.css">
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
        <a href="booking.php" class="act"><i class="fa fa-check-circle" aria-hidden="true"></i><span>BOOKING</span></a>
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
            $tableno=$_POST['tableno'];
            $bdate=$_POST['bdate'];
            $bfrom=$_POST['bfrom'];
            $bto=$_POST['bto'];
            $bconfirm=$_POST['bconfirm'];
            
            $connection=mysqli_connect("localhost","root","","project");
            
            $sql_t="SELECT * FROM `booking` WHERE tableno='$tableno' AND bdate='$bdate'  ";
            $sql_u="SELECT * FROM `booking` WHERE bfrom  BETWEEN '$bfrom' AND '$bto'";
            $res_t=mysqli_query($connection,$sql_t) or die(mysqli_error($connection));
            $res_u=mysqli_query($connection,$sql_u) or die(mysqli_error($connection));
            
            if(mysqli_num_rows($res_t)>0)
            {
                if(mysqli_num_rows($res_u)>0)
                {
                echo "<div class='mila'>The table is not free at the selected time.</div>";
                }
            }
            else{
                $query="INSERT INTO booking VALUES('','$name','$email','$contact','$tableno','$bdate','$bfrom','$bto','$bconfirm')";
                $query_run=mysqli_query($connection,$query) or die(mysqli_error($connection));
                
                if($query_run)
                {
                    
                    echo "<div class='mila'>We will contact you soon for confirmation</div> ";
                   
                }
            }
        }
        

    ?>

    
    <img src="photos/bo1.jpg" class="table">
   
    <div class="book"><img src="photos/book2.png" class="log">
    <form action="" method="post">
         <h4>Please choose your table</h4>
            <div class="booking-form">
                <p>Name:</p><br><input type="text" name="name" placeholder="Your Name" size="35" required><br><br>
                <p>Email:</p><br><input type="email" name="email" placeholder="Your Email" size="35" required><br><br>
                <p>Contact Number:</p><br><input type="tel" name="contact" placeholder="Your Number" size="35" required><br><br>
                <p>Table no:</p><br>
                <select name=tableno class="aza">
                    <option value="--Select--">--Select--</option>
                    <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                </select>
                <br>
                <br>
                <p>Booking Date:</p><br><input type="date" name="bdate"  min="2020" required><br><br>
               <p>Booking Time:</p> <br>
                <div class="t"><span>From:
                    <select name="bfrom" required>
                        <option value="--Select--">--Select--</option>
                        <option value="10:30">10:30</option>
                        <option value="10:45">10:45</option>
                        <option value="11:00">11:00</option>
                        <option value="11:15">11:15</option>
                        <option value="11:30">11:30</option>
                        <option value="11:45">11:45</option>
                        <option value="12:00">12:00</option>
                        <option value="12:15">12:15</option>
                        <option value="12:30">12:30</option>
                        <option value="12:45">12:45</option>
                        <option value="13:00">13:00</option>
                        <option value="13:15">13:15</option>
                        <option value="13:30">13:30</option>
                        <option value="13:45">13:45</option>
                        <option value="14:00">14:00</option>
                        <option value="14:15">14:15</option>
                        <option value="14:30">14:30</option>
                        <option value="14:45">14:45</option>
                        <option value="15:00">15:00</option>
                        <option value="15:15">15:15</option>
                        <option value="15:30">15:30</option>
                        <option value="15:45">15:45</option>
                        <option value="16:00">16:00</option>
                        <option value="16:15">16:15</option>
                        <option value="16:30">16:30</option>
                        <option value="16:45">16:45</option>
                        <option value="17:00">17:00</option>
                        <option value="17:15">17:15</option>
                        <option value="17:30">17:30</option>
                        <option value="17:45">17:45</option>
                        <option value="18:00">18:00</option>
                        <option value="18:15">18:15</option>
                        <option value="18:30">18:30</option>
                        <option value="18:45">18:45</option>
                        <option value="19:00">19:00</option>
                        <option value="19:15">19:15</option>
                        <option value="19:30">19:30</option>
                        <option value="19:45">19:45</option>
                        <option value="20:00">20:00</option>
                    </select>
                -
                To:
                    <select name="bto" required>
                         <option value="--Select--">--Select--</option>
                        <option value="10:30">10:30</option>
                        <option value="10:45">10:45</option>
                        <option value="11:00">11:00</option>
                        <option value="11:15">11:15</option>
                        <option value="11:30">11:30</option>
                        <option value="11:45">11:45</option>
                        <option value="12:00">12:00</option>
                        <option value="12:15">12:15</option>
                        <option value="12:30">12:30</option>
                        <option value="12:45">12:45</option>
                        <option value="13:00">13:00</option>
                        <option value="13:15">13:15</option>
                        <option value="13:30">13:30</option>
                        <option value="13:45">13:45</option>
                        <option value="14:00">14:00</option>
                        <option value="14:15">14:15</option>
                        <option value="14:30">14:30</option>
                        <option value="14:45">14:45</option>
                        <option value="15:00">15:00</option>
                        <option value="15:15">15:15</option>
                        <option value="15:30">15:30</option>
                        <option value="15:45">15:45</option>
                        <option value="16:00">16:00</option>
                        <option value="16:15">16:15</option>
                        <option value="16:30">16:30</option>
                        <option value="16:45">16:45</option>
                        <option value="17:00">17:00</option>
                        <option value="17:15">17:15</option>
                        <option value="17:30">17:30</option>
                        <option value="17:45">17:45</option>
                        <option value="18:00">18:00</option>
                        <option value="18:15">18:15</option>
                        <option value="18:30">18:30</option>
                        <option value="18:45">18:45</option>
                        <option value="19:00">19:00</option>
                        
                        
                    </select>
               
                </span>
                <input type="hidden" name="bconfirm" value="Not Confirmed">
                </div>
                <br>
                <br>
            <input type="submit" name="send" value="SUBMIT">
            </div>

    </form>
    </div>
     <div class="herna">
         <p>If you want to view the details of your booking <span class="ya"><a href="showbooking.php">Click Here</a></span></p>
    </div>
             <div class="footer">
                 <div class="soc">
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
       <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
                 </div>
        <br><br>
        
        
    <div class="copyri">
            <p>&#169; 2020 THE BELLYCIOUS.The Rights Reserved</p>
            </div>
        </div> 
    </body>
</html>



