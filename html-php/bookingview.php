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
    <title>Booking Screen</title>
        <link rel="stylesheet" type="text/css" href="booking.css">
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
                <a href="orders.php" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>ORDERS</span></a>
                <a href="bookingview.php" class="act"><i class="fa fa-server" aria-hidden="true"></i><span>BOOKINGS</span></a>
                <a href="billpage.php"><i class="fa fa-credit-card" aria-hidden="true"></i><span>BiILLINGS</span></a>
            </div>
            <div class="right_area">
                <a href="emp_home.php?logout='1'" class="logout"><span>LOGOUT</span></a>
            </div>
            </header>
        <div class="mainp">
        <h1>TABLE BOOKINGS</h1>
    <div class="content">
        
        <table>
        <tr>
            <th>ID</th>
            <th>Customer Details</th>
            <th>Table</th>
            <th>Date</th>
            <th>Time</th>
            <th >Status</th>
            <th colspan="2" align="center" >Options</th>
            
            </tr>
             <?php
            $sql="SELECT * FROM `booking`";
            $result=mysqli_query($db,$sql);
            
            while($row=mysqli_fetch_assoc($result))
                   {
                      
                       echo "
                        <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['name']." <br> ".$row['contact']." <br> ".$row['email']. " </td>
                                <td>".$row['tableno']."</td>
                                <td>".$row['bdate']."</td>
                                <td>".$row['bfrom']." - ".$row['bto']."</td>
                                <td>".$row['bconfirm']."</td>
                                <td><a href = 'bupdate.php?id=$row[id]&name=$row[name]&email=$row[email]&contact=$row[contact]&tableno=$row[tableno]&bdate=$row[bdate]&bfrom=$row[bfrom]&bto=$row[bto]&bconfirm=$row[bconfirm]'>Update</a> </td>
                                <td><a href = 'booking_delete.php?id=$row[id]'>Delete</td>
                         
                            
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


<?php



?>