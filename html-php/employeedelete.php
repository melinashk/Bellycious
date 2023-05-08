<html>
<head>
    <title>Delete Employee</title>
    <link rel="stylesheet" type="text/css" href="staff.css">
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
        <div class="mainp">
        <h1>Staffs</h1>
        <div class="bar">
            <ul>
                <span class="cont">
                    <li ><a href="employeeview.php">View Staff Info</a></li>
                    <li ><a href="employeeadd.php">Add New Staff</a></li>
                    <li><a href="employeeupdate.php">Update Staff Info</a></li>
                    <li class="active"><a href="employeedelete.php">Remove Staff</a></li>
                </span>
            </ul>
        </div>
    
    <center>
        <div class="kxa">
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Date Of Joining</th>
                        <th>Post</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                    $connection = mysqli_connect("localhost","root","","project");
                
                    
                    $query = "SELECT * FROM `employee` ORDER BY id asc";
                   $query_run=mysqli_query($connection,$query)or die(mysql_errno($connection));
                    
                   while($row=mysqli_fetch_array($query_run))
                   {
                       ?>
                        <tr>
                            <form action="" method="POST" target="_self">
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['dob'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['contact'];?></td>
                                <td><?php echo $row['joindate'];?></td>
                                <td><?php echo $row['job'];?></td>
                                <td class="try"><a href = "deleteemployee.php?delete=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">Delete</a> </td>
                            </form>
                            
                        </tr>
                        <?php
                      }
                   
                    
                  ?>
            </table>
        
        </form>
            </div>
    </center>
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



