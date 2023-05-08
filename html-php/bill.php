<?php include('bill_server.php') ?>
<html>
<head>
    <title>Invoice System</title>
    <link rel="stylesheet" type="text/css" href="bill.css">
          </head>
    <body>
        <div class="box">
            <div class="top">
            <h1>Bellycious Restaurant</h1>
            </div>
            
            <h2>Total Bill</h2>
           
        <table>
            
        
            
            <?php
            $id=$_GET['id'] ;          
    
    
            $sql="SELECT * FROM `bills` WHERE id='$id'";
            $result=mysqli_query($dbase,$sql);
                if($result)
                {
                    echo "";
                }
            
           
                while($row = mysqli_fetch_assoc($result)){
                     $id= $row['id'];
                    $ldate= $row['date'];
                   
                    $orders=$row['orders'];
                    $rate=$row['rate'];
                    $quantity=$row['quantity'];
                    $total=$row['total'];
        
            ?>
               <tr>
                <th class="oi">Billno.</th>
                <td class="oi"><?php echo $id ?></td>
                <th class="oi">Date:</th>
                <td class="oi"><?php echo $ldate ?></td>
            </tr>
            <tr>
            <th class="pp">Order</th>
            <th class="pp">Rate</th>
            <th class="pp">Quantity</th>
           
            </tr>
            <tr>
            <td class="gg"><?php echo $orders ?></td>
            <td class="gg"><?php echo $rate ?></td>
            <td class="qq"><?php echo $quantity ?></td>
            </tr>
            
            <tr>
            <th class="lol">Total:</th>
            <td class="lol"></td>    
            <td class="lol"></td>
                
            <td class="lol"><?php echo $total ?></td>
            </tr>
           
            <?php
                }
             
            ?>
           
            </table>
 
        </div>
         <a href="billpage.php">Entry Page</a>
    </body>
</html>