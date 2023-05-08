<html>
<head>
    <title>Bill Options</title>
  <link rel="stylesheet" type="text/css" href="billop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>
    <div class="mainp">
       <div class="proceed">
       <a href="billpage.php"><i class="fas fa-hand-point-left"></i>  Go To Bill Page  </a>     
    </div>
        <table>
            <tr>
            <th>Date</th>
            <th>Billno.</th>
            <th>Order</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>Total</th>
            <th colspan="3" align="center">Actions</th>
            </tr>
            <?php
            
            $dbase=mysqli_connect("localhost","root","","project");
            
            $sql="SELECT * FROM `bills`";
            $result=mysqli_query($dbase,$sql);
            
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                     $billdate= $row['date'];
                    $id= $row['id'];
                    $orders=$row['orders'];
                    $rate=$row['rate'];
                    $quantity=$row['quantity'];
                    $total=$row['total'];
        
            ?>
            <tr>
            <td><?php echo $billdate ?></td>
            <td><?php echo $id ?></td>
            <td class="arkai"><?php echo $orders ?></td>
            <td><?php echo $rate ?></td>
            <td class="milaune"><?php echo $quantity ?></td>
            <td><?php echo $total ?></td>
            <td><a href="bill.php?id=<?php echo $id?>">Generate Bill</a></td>
            <td><a href="bill_edit.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure?');">Update</a></td>
            <td><a href="bill_delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
            </tr>
            <?php
            }   
        }
        ?>
            </table>
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