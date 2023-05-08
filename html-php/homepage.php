<!DOCTYPE html>
<html>
<head>
    <title>HOMEPAGE</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <meta charset="utf-8">
    
    </head>
    <body>
    <header>
    <div class="head">      
        <div class="left_area">
            <img src="photos/new.png" class="bellycious">
            <a href="homepage.php" class="act"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="mainmenu.php"><i class="fa fa-table" aria-hidden="true"></i><span>MENU</span></a>
            <a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>ABOUT US</span></a>
        </div>
        <div class="right_area">
            <a href="login.php"><span>LOGIN</span></a>
        </div>
        </div>
    </header>
        <div class="abcd">
        <div class="pichome">
         
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
                            <td><?php echo $row['open'];?></td>
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
    <div class="middle">
        <div class="feed">
            <h3>CUSTOMER'S FEEDBACK</h3>
            <div class="op">
               
            </div>    
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

