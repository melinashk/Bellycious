<?php
include 'bill_server.php';
$id =$_POST['id'];
$date=$_POST['date'];
$orders=$_POST['orders'];
$rate=$_POST['rate'];
$quantity=$_POST['quantity'];
$total= $rate*$quantity;

$sql="UPDATE bills  SET  orders='$orders', rate='$rate',quantity='$quantity', total='$total' WHERE id='$id'";
$result=mysqli_query($dbase,$sql);

if($result){
    header("Location:billop.php");
}
?>






