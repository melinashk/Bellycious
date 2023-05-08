<?php

$id = $_GET['id'];
$db=mysqli_connect("localhost","root","","project");
$sql="DELETE FROM booking WHERE id=$id";
$result=mysqli_query($db,$sql);
if($result){
    header("Location:bookingview.php");
}
?>