<!DOCTYPE html>
<html>
<head>
    <title>USER'S HOMEPAGE</title>
    <link rel="stylesheet" type="text/css" href="cssuser.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <meta charset="utf-8">
    
    </head>
    <body>
    <header>      
        <div class="left_area">
            <img src="photos/new.png" class="bellycious">
            <a href="userhomepage.php" class="act"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="order.php"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span>ORDER  </span></a>
            <a href="booking.php"><i class="fas fa-check-circle" aria-hidden="true"></i><span>BOOKING</span></a>
            <a href="feedbackadd.php"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK</span></a>
        </div>
        <div class="right_area">
            <a href="homepage.php"><span>LOG OUT</span></a>
        </div>
    </header>
        <div class="abcd">
        <div class="outer">
        <div class="pichome">
            
            <img src="photos/slide1.png">
            <img src="photos/slide2.png" >
            <img src="photos/slide3.png" >
            
        </div>
        </div>    
        <div class="inp">
            <center>
        
            <table>
                
                <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'project');
                    
                    $query = "SELECT * FROM `status` ";
                   $query_run=mysqli_query($connection,$query)or die(mysql_errno($connection));
                    
                   while($row=mysqli_fetch_array($query_run))
                   {
                       ?>
                        <tr>
                            
                            <td class="lk"><?php echo $row['open'];?></td>
                        </tr>
                        <?php
                   }


                ?>
            </table>
        
    </center>
        </div>
         <div class="slogan">
            <img src="photos/slogan.png">
        </div>
           
                <div class="jh">
                <img src="photos/c10.png" class="ek"><br><br><br><br><br><br>
                <img src="photos/c20.png" class="ek"><br>
                
                </div>
                <img src="photos/3.jpeg" class="vi-ek">
                <div class="lk">
                <img src="photos/c30.png" class="dui"><br><br><br><br><br><br>
                <img src="photos/c40.png" class="dui"><br>
                </div>
                <img src="photos/8.jpeg" class="vi-dui">
         <div class="bro">
            <img src="photos/chefbro.png">
        </div>
        <div class="quo">
        <img src="photos/quote.png">
        </div>
        <div class="back">
            <h3>NEWS & OFFERS</h3>
        <div class="news">
            
           
        <marquee  behaviour="scroll" direction="up" scrollamount="4" 
                 onmouseover="this.setAttribute('scrollamount',0,0); this.stop(); " height="70%"                              onmouseout="this.setAttribute('scrollamount',4,0); this.start(); "  class="scrollfb">                                                                                        
              <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'project');
                    
                    $query = "SELECT * FROM `newsfeed` ORDER BY id asc";
                   $query_run=mysqli_query($connection,$query)or die(mysql_errno($connection));
                    
                   while($row=mysqli_fetch_array($query_run))
                   {
                       ?>
                        <tr>
                            <td><?php echo $row['news'];?></td><br><hr>
                        </tr>
                        <?php
                   }


                ?>
            
            </marquee>
            
        </div>
        </div>        
        <div class="queries">
            <div class="inside">
        <p>If you are having problem regarding ordering or booking or if you have any queries,
            let us know .Contact is down below.</p>
        </div>
        </div>
        </div>
         <div class="footer">
            <div class= "add">
            <address>
                <div class="headd">
                <p>CONTACT</p>
                    </div>
                <i class="fas fa-map-marker-alt"></i>  Address: Sankhamul-10,Lalitpur<br>
                &#x260F; +977-9841098765<br> 
                &#x2709; dine@bellycious.com.np<br>
                &#x1F559; 10:00 AM - 10:00 PM<br>
                    <div class="media">
                        <ul>
                            <li><i class="fab fa-instagram" aria-hidden="true"></i></li>
                            <li><i class="fab fa-facebook-square" aria-hidden="true"></i></li>
                            <li><i class="fab fa-twitter-square" aria-hidden="true"></i></li>
                        </ul>
                    </div>
               
            </address>
            </div>
            <br>
            <div class="copyri">
            <p>&#169; 2020 THE BELLYCIOUS.The Rights Reserved</p>
            </div>
        </div>
    
    </body>
</html>