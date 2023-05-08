<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bill Update</title>
    <link rel="stylesheet" type="text/css" href="bill_edit.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    </head>
    
<body>
    
    <h1>Update Bill</h1>
    <?php
    include 'bill_server.php';
    $id=$_GET['id'];
    
    $sql="SELECT * FROM bills WHERE id=$id";
    $result=mysqli_query($dbase,$sql);
    
    if($result){
        $row=mysqli_fetch_assoc($result);
        $id= $row['id'];
        $orders=$row['orders'];
        $rate=$row['rate'];
        $quantity=$row['quantity'];
        
    }
    ?>
    <div class="up">
    <form method="post" action="billedit.php">
        <div class="main">
        <p>Order:</p>
            <input type="text" name="orders" id="orders" value="<?php echo $orders ?>" size="35" required><br>
    <p>Rate:</p>
<input type="text" name="rate" id="rate" value="<?php echo $rate ?>"  required><br>
             <p>Quantity:</p>
<input type="text" name="quantity" id="quantity" value="<?php echo $quantity ?>"  required><br>
            

    <input type="hidden" name="id" id="id" value="<?php global $id; echo $id ?>" required>
        <input type="submit" value="UPDATE"><br>
        </div>
    </form>
    </div>
    <div class="back">
    <span><a href="billop.php">Go back</a></span>
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


