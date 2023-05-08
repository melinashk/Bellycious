<?php include('server.php') ?>
<?php
   
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:homepage.php');
    }
?>

<html>
<head>
    <title>Orders Screen</title>
    <link rel="stylesheet" type="text/css" href="orders.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="10">
 </head>
    <body>
        <header>
            <div class="left_area">
                <img src="photos/staff.png" class="bellycious">
                <a href="emp_home.php" ><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
                <a href="orders.php" class="act"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>ORDERS</span></a>
                <a href="bookingview.php"><i class="fa fa-server" aria-hidden="true"></i><span>BOOKINGS</span></a>
                <a href="billpage.php"><i class="fa fa-credit-card" aria-hidden="true"></i><span>BiILLINGS</span></a>
            </div>
            <div class="right_area">
                <a href="emp_home.php?logout='1'" class="logout"><span>LOGOUT</span></a>
            </div>
            </header>
        <div class="mainp">
        <h1>NEW ORDERS</h1>
    <div class="content">
        
        <table>
        <tr>
           
            <th>Customer Details</th>
            <th>Order</th>
            <th>Quantity</th>
            <th><span>Status</span></th>
            <th colspan="2" align="center">Options</th>
            </tr>
            <?php
            $sql="SELECT * FROM `ordering`";
            $result=mysqli_query($db,$sql);
            
             while($row=mysqli_fetch_assoc($result))
                   {
                      
                       echo "
                        <tr>
                               
                                <td class='bac'>".$row['name']." <br> ".$row['contact']." <br> ".$row['email']."</td>
                               
                                <td>".$row['food']."</td>
                                <td>".$row['quantity']."</td>
                                <td>".$row['oconfirm']."</td>
                                
                                <td><a href = 'oupdate.php?id=$row[id]&name=$row[name]&email=$row[email]&contact=$row[contact]&food=$row[food]&quantity=$row[quantity]&oconfirm=$row[oconfirm]'>Update</a> </td>
                                <td><a href = 'order_delete.php?id=$row[id]'>Delete</td>
                         
                            
                        </tr>
                        ";
                       
                   }
            
        ?>
        </table>
        </div>
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