<?php
include 'bill_server.php';
$id = $_GET['id'];

$sql="DELETE FROM bills WHERE id=$id";
$result=mysqli_query($dbase,$sql);
if($result){
    header("Location:billop.php");
}
?>