<?php

$connnection=mysqli_connect("localhost","root","","project");

$id=$_GET['id'];
$name= $_GET['name'];
$caddress=$_GET['address'];
$dob=$_GET['dob'];
$email=$_GET['email'];
$contact=$_GET['contact'];
$joindate=$_GET['joindate'];
$job=$_GET['job'];
?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="sup.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Update Employee</title>
</head>
<body>
     <header>
     
        <div class="left_area">
            <img src="photos/admin.png" class="bellycious">
            <a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="menuview.php"><i class="fa fa-table" aria-hidden="true"></i><span>MENU</span></a>
            <a href="employeeview.php"><i class="fa fa-id-badge" aria-hidden="true"></i><span>STAFF</span></a>
            <a href="feedbackview.php"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK & NEWS</span></a>
        </div>
        <div class="right_area">
            <a href="homepage.php"><span>LOG OUT</span></a>
        </div>
    </header>
    <h1>Udpate Staff Info</h1>
    <form action="" method="GET" target="_self" class="fo">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <p>Name:</p><input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter name"/>
        <p>Current Address:</p><input type="text" name="address" value="<?php echo $caddress;?>" placeholder="Enter current address"/><br>
        <p>DOB:</p><input type="date" name="dob" value="<?php echo $dob;?>" placeholder="Enter date of birth"/><br>
        <p>Email:</p><input type="text" name="email" value="<?php echo $email;?>" placeholder="Enter email"/><br>
        <p>Contact:</p><input type="text" name="contact" value="<?php echo $contact;?>" placeholder="Enter contact number "/><br>
        <p>Joining Date:</p><input type="date" name="joindate"  value="<?php echo $joindate;?>" placeholder="Enter date of joining"/><br>
        <p>Post:</p><input type="text" name="job" value="<?php echo $job;?>" placeholder="Enter post"/><br>
        <span><input type="submit" name="update" value="Update"/></span>
        <span><input type="reset" name="cancel" value="Cancel"/>
        </span>
    </form>
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

if(isset($_GET['update']))
{
    $uid=$_GET['id'];
    $uname=$_GET['name'];
    $uaddress=$_GET['address'];
    $udob=$_GET['dob'];
    $uemail=$_GET['email'];
    $ucontact=$_GET['contact'];
    $ujoindate=$_GET['joindate'];
    $ujob=$_GET['job'];
    
    $connection=mysqli_connect("localhost","root","","project");
    
    $query="UPDATE employee SET name='$uname',address='$uaddress',dob='$udob',email='$uemail',contact='$ucontact',joindate='$ujoindate',job='$ujob' WHERE id='$uid' ";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
        header('Location:employeeupdate.php');
    }
}

?>


