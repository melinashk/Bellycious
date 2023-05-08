<?php

$connnection=mysqli_connect("localhost","root","","project");
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$contact=$_GET['contact'];
$food=$_GET['food'];
$quantity=$_GET['quantity'];
$oconfirm=$_GET['oconfirm'];
?>

<html>
<head>
    <title>Ordering</title>
    <link rel="stylesheet" type="text/css" href="oupdate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    
</head>
<body>
    <h1>Update The Order</h1>
    <div class="order">
          
        <form action="#" target="_self" method="GET">
       
            <div class="order-form">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <p>Name:</p><br><input type="text" name="name" value="<?php echo $name;?>"  placeholder="Your Name" size="35"><br><br>
                <p>Email:</p><br><input type="email" name="email" value="<?php echo $email;?>" placeholder="Your Email" size="35"><br><br>
                <p>Contact Number:</p><br><input type="tel" name="contact" value="<?php echo $contact;?>" placeholder="Your Number" size="35"><br><br>
                <div class="t">
                <p>Food Items:</p><br><input type="text" name="food" value="<?php echo $food;?>" size="35">
                <br>
                <br>    
                <p>Quantity:</p><br><input type="text" name="quantity" value="<?php echo $quantity;?>" size="5">
                <br><br>
                <p>Confirmation:</p><br><input type="text" name="oconfirm" value="<?php echo $oconfirm;?>" size="35" >
                </div>
                
                <input type="submit" name="submit" value="SUBMIT">
            </div>
    </form>
        
        <?php

            if(isset($_GET['submit']))
            {
                $uid=$_GET['id'];
                $uname=$_GET['name'];
                $uemail=$_GET['email'];
                $ucontact=$_GET['contact'];
                $ufood=$_GET['food'];
                $uquantity=$_GET['quantity'];
                $uoconfirm=$_GET['oconfirm'];
    
                $connection=mysqli_connect("localhost","root","","project");
    
                $query="UPDATE ordering SET 
                name='$uname',email='$uemail',contact='$ucontact',food='$ufood',quantity='$uquantity',oconfirm='$uoconfirm' WHERE id='$uid'";
                $query_run=mysqli_query($connection,$query);
    
                if($query_run)
                {
                    header('Location:orders.php');
                }
            }

        ?>


        
    </div>
    <div class="back">
    <span><a href="orders.php">Go back</a></span>
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



