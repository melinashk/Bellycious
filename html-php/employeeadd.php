<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="staffadd.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>
    <header>
     
        <div class="left_area">
            <img src="photos/admin.png" class="bellycious">
            <a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="menuview.php"><i class="fa fa-table" aria-hidden="true"></i><span>MENU</span></a>
            <a href="employeeview.php" class="act"><i class="fa fa-id-badge" aria-hidden="true"></i><span>STAFF</span></a>
            <a href="feedbackview.php"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK/ NEWS</span></a>
        </div>
        <div class="right_area">
            <a href="homepage.php"><span>LOG OUT</span></a>
        </div>
    </header>
        <br>
    <div class="mainp">
        <h1>Staffs</h1>
        <div class="bar">
            <ul>
                <span class="cont">
                    <li ><a href="employeeview.php">View Staff Info</a></li>
                    <li class="active"><a href="employeeadd.php">Add New Staff</a></li>
                    <li><a href="employeeupdate.php">Update Staff Info</a></li>
                    <li ><a href="employeedelete.php">Remove Staff</a></li>
                </span>
            </ul>
        </div>
       
    
    <form action="" method="POST" enctype="multipart/form-data" class="fo">
        <p>Name:</p><input type="text" name="name" placeholder="Enter name" size="30" required/>
        <p>Current Address:</p><input type="text" name="address" placeholder="Enter current address" size="30" required/><br>
        <p>DOB:</p><input type="date" name="bdate" placeholder="Enter date of birth" size="30" required/><br>
        <p>Email:</p><input type="text" name="email" placeholder="Enter email" size="30" required/><br>
        <p>Contact:</p><input type="text" name="number" placeholder="Enter contact number" size="30" reuired/><br>
        <p>Joining Date:</p><input type="date" name="jdate" placeholder="Enter date of joining" size="30" required/><br>
        <p>Post:</p><input type="text" name="job" placeholder="Enter post" size="30" required/><br><br>
        <span><input type="submit" name="add" value="Add"/></span>
        <span><input type="reset" name="cancel" value="Cancel"/>
        </span>
    </form>
    </div>
    <?php
        
        if(isset($_POST['add']))
        {
            $name=$_POST['name'];
            $caddress=$_POST['address'];
            $dob=$_POST['bdate'];
            $email=$_POST['email'];
            $contact=$_POST['number'];
            $joindate=$_POST['jdate'];
            $job=$_POST['job'];
            
            
            $connection=mysqli_connect("localhost","root","","project");
            
            $query="INSERT INTO employee VALUES('','$name','$caddress','$dob','$email','$contact','$joindate','$job')";
           $query_run=mysqli_query($connection,$query);
            
            if($query_run)
            {
                echo "done";
                
            }
            
        }

    ?>
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