<?php include('bill_server.php') ?>


<html>
<head>
    <title>Invoice System</title>
    <link rel="stylesheet" type="text/css" href="billpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
    <body>
        <header>
    <div class="left_area">
        <img src="photos/staff.png" class="bellycious">
        
        <a href="emp_home.php" ><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
        <a href="orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>ORDERS</span></a>
        <a href="bookingview.php"><i class="fa fa-server" aria-hidden="true"></i><span>BOOKINGS</span></a>
        <a href="billpage.php" class="act"><i class="fa fa-credit-card" aria-hidden="true"></i><span>BiILLINGS</span></a>
        </div>
        <div class="right_area">
        <a href="emp_home.php?logout='1'" class="logout"><span>LOGOUT</span></a>
        </div>
        </header>
         <div class="proceed">
               <a href="billop.php">Go To Bill View  <i class="fas fa-hand-point-right"></i></a>
        </div>
        <h1>INVOICE PAGE</h1>
        <div class="content">
             
          
           
            
            <form method="post" action="">
            <?php include('errors.php'); ?>    
           
             <input type="hidden" name="billno" value="<?php echo $billno; ?>" placeholder="Enter billno" required>
            <p>Date:</p><input type="date" name="dateb" value="<?php echo $dateb; ?>"  required>
            <p>Food Name:</p>
                <select name="orders" required>
                    <option>------Select food item------</option>
                    
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
                
            <p>Rate:</p>
            <select name="rate" required>
                     <option>----Select rate of food item----</option>
                    
                     <?php
                        $connection=mysqli_connect("localhost","root","","project");
                        $query="SELECT * FROM `menu` ORDER BY name desc";
                        $query_run=mysqli_query($connection,$query);

                        if($query_run)
                        {
                            while($row=mysqli_fetch_array($query_run))
                            {
                                ?>
                            <option><?php echo $row['price']; ?></option>
                                <?php
                            }
                        }
                    
                    ?>
                </select>
            <p>Quantity:</p><input type="text" name="quantity" value="<?php echo $quantity; ?>" placeholder="Enter Quantity" required>
            <input type="hidden" name="total"  placeholder="Enter Total"><br><br>
            <input type="submit" name="bill" value="ADD">
             
            
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
    </body>
</html>