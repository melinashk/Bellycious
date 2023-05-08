<?php

$connection=mysqli_connect("localhost","root","","project");

$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$contact=$_GET['contact'];
$tableno=$_GET['tableno'];
$bdate=$_GET['bdate'];
$bfrom=$_GET['bfrom'];
$bto=$_GET['bto'];
$bconfirm=$_GET['bconfirm'];

?>




<html>
<head>
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="bupdate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>
    <h1>Update The Booking</h1>
    <div class="book">
    <form action="" method="GET">
        
            <div class="booking-form">
                <input type="hidden" name="id" value="<?php echo "$id";?>"> 
                <p>Name:</p><br><input type="text" name="name" value="<?php echo "$name";?>" placeholder="Your Name" size="35" required><br><br>
                <p>Email:</p><br><input type="email" name="email" value="<?php echo "$email";?>" placeholder="Your Email" size="35" required><br><br>
                <p>Contact Number:</p><br><input type="tel" name="contact" value="<?php echo "$contact";?>"  placeholder="Your Number" size="35" required><br><br>
                <p>Table no:</p><input type="text" name="tableno" value="<?php echo "$tableno";?>" size="5"><br><br>
                
                <p>Booking Date:</p><br><input type="date" name="bdate" value="<?php echo "$bdate";?>"   required><br><br>
               <p>Booking From:</p><br> <input type="text" name="bfrom" value="<?php echo "$bfrom";?>" size="35"><br><br>
                <p>Booking To:</p><br><input type="text" name="bto" value="<?php echo "$bto";?>" size="35"><br><br>
                
                <p>Confirmation:</p><br><input type="text" name="bconfirm" value="<?php echo "$bconfirm";?>" size="35">
                <input type="submit" name="update" value="SUBMIT">
        </div>
        
    </form>
    </div>
    <div class="back">
    <span><a href="bookingview.php">Go back</a></span>
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

if(isset($_GET['update']))
{
    $uid=$_GET['id'];
    $uname=$_GET['name'];
    $uemail=$_GET['email'];
    $ucontact=$_GET['contact'];
    $utableno=$_GET['tableno'];
    $ubdate=$_GET['bdate'];
    $ubfrom=$_GET['bfrom'];
    $ubto=$_GET['bto'];
    $ubconfirm=$_GET['bconfirm'];
    
    $connection=mysqli_connect("localhost","root","","project");
    
    $query="UPDATE booking SET name='$uname',email='$uemail',contact='$ucontact',tableno='$utableno',bdate='$ubdate',bfrom='$ubfrom',bto='$ubto',bconfirm='$ubconfirm' WHERE id='$uid' ";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
        header('Location:bookingview.php');
    }
}

?>




