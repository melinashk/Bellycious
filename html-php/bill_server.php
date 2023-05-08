<?php
session_start();

//initializing variables
$dateb="";
$billno="";
$orders="";
$rate="";
$quantity="";
$total="";

$errors=array();

//connect to database
$dbase=mysqli_connect('localhost','root','','project');


if(isset($_POST['bill'])){
    //recieve input  values from the form
    $dateb = mysqli_real_escape_string($dbase, $_POST['dateb']);
    $billno = mysqli_real_escape_string($dbase, $_POST['billno']);
    $orders = mysqli_real_escape_string($dbase, $_POST['orders']);
    $rate = mysqli_real_escape_string($dbase, $_POST['rate']);
    $quantity = mysqli_real_escape_string($dbase, $_POST['quantity']);
    $total= $rate*$quantity;
      
    //form validation :: by adding (array_push())  corresponding error into $errors array
    if(empty($orders)){ array_push($errors, "Order is required");}
    if(empty($rate)){ array_push($errors, "Rate is required");}
    if(empty($quantity)){ array_push($errors, "Quantity is required");}
    
    
    

    
   
    if(count($errors) == 0) {
        
            $query="INSERT INTO bills (date,id,orders,rate,quantity,total) VALUES('$dateb','','$orders','$rate','$quantity','$total')";
            $result=mysqli_query($dbase,$query);
            if($result){
            header('location: billpage.php');		
            }
    }
}
