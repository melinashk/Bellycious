<html>
<head>
    <title>Update Menu</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>
     <header>
     
        <div class="left_area">
            <img src="photos/admin.png" class="bellycious">
            <a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="menuview.php" class="act"><i class="fa fa-table" aria-hidden="true"></i><span>MENU</span></a>
            <a href="employeeview.php"><i class="fa fa-id-badge" aria-hidden="true"></i><span>STAFF</span></a>
            <a href="feedbackview.php"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK & NEWS</span></a>
        </div>
        <div class="right_area">
            <a href="homepage.php"><span>LOG OUT</span></a>
        </div>
    </header>
        <br>
        
        <div class="bar">
            <ul>
                <span class="cont">
                    <li ><a href="menuview.php">View Menu</a></li>
                    <li ><a href="menuadd.php">Add Food Item</a></li>
                    <li class="active"><a href="#">Update Menu Item</a></li>
                    <li><a href="menudelete.php">Remove Menu Item</a></li>
                </span>
            </ul>
        </div>
     
    <h1>Menu Management</h1>
    <center>
        <div class="kxa">
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'project');
                    
                    $query = "SELECT * FROM `menu` ORDER BY category desc";
                   $query_run=mysqli_query($connection,$query)or die(mysql_errno($connection));
                    
                   while($row=mysqli_fetch_array($query_run))
                   {
                       ?>
                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="image" width="100px";height="100px";">';?></td>
                            <td class="try"><a href = "mupdate.php?update=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">Update</a> </td>
                        </tr>
                        <?php
                   }
                    


                ?>
            </table>
        
        </form>
            </div>
    </center>
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