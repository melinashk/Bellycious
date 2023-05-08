<html>
    <head>
        <link rel="stylesheet" type="text/css" href="showbook.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="yoyo">
            <form action="" method="POST" target="_self">
                <p>Enter Your Email:</p><br><input type="email" name="email" placeholder="Your Email" size="35"><br><br>
                <span><input type="submit" name="submit" value="View"></span>
            </form>    
                
     
       </div>
            <center>
            <table>
                <thead>
                    <tr>
                       
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Food</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        
                        
                        
                    </tr>
                </thead>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $email=$_POST['email'];
    
                        $connection=mysqli_connect("localhost","root","","project");
    
                        $query="SELECT * FROM `ordering` WHERE email='$email'";
                        $query_run=mysqli_query($connection,$query);
    
                         while($row=mysqli_fetch_array($query_run))
                         {
                        ?>
                        <tr>
                            
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['food'];?></td>
                            <td class="bichma"><?php echo $row['quantity'];?></td>
                            <td><span><?php echo $row['oconfirm'] ?> </span></td>
                           
                            
                        </tr>
                        <?php
                   }
                    }
                    
                  


                ?>
            </table>
        </center> 
        
        
        <div class="back">
            <a href="order.php">Back To Order</a>
        </div>
        <div class="footer">
            <div class="soc">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
        <div class="copyri">
            <p>&#169; 2020 THE BELLYCIOUS.The Rights Reserved</p>
        </div>
        </div>
    </body>
</html>


<?php

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    
    $connection=mysqli_connect("localhost","root","","project");
    
    $query="SELECT * FROM `booking` WHERE email='$email'";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
       echo "";
    }
}

?>