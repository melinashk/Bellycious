<html>
<head>
    <title>Add Menu</title>
    <link rel="stylesheet" type="text/css" href="menuadd.css">
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
        <h1>Menu Management</h1>
        <div class="bar">
            <ul>
                <span class="cont">
                    <li ><a href="menuview.php">View Menu</a></li>
                    <li class="active"><a href="">Add Food Item</a></li>
                    <li><a href="menuupdate.php">Update Menu Item</a></li>
                    <li><a href="menudelete.php">Remove Menu Item</a></li>
                </span>
            </ul>
        </div>
    
    
    <form action="" method="POST" enctype="multipart/form-data" class="fo">
        <p>Name:</p><input type="text" name="name" placeholder="Enter food name" size="30"/>
        <p>Category:</p><input type="text" name="category" placeholder="Enter category" size="30"/><br>
        <p>Price:</p><input type="text" name="price" placeholder="Enter price" size="5"/><br>
        <p>Choose food image:</p>
        <input type="file" name="image" id="image"/><br><br>
        <span><input type="submit" name="add" value="Add"/></span>
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
        
        if(isset($_POST['add']))
        {
            $name=$_POST['name'];
            $category=$_POST['category'];
            $price=$_POST['price'];
            $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            
            $connection=mysqli_connect("localhost","root","","project");
            
            $query="INSERT INTO menu VALUES('','$name','$category','$price','$file')";
           $query_run=mysqli_query($connection,$query);
            
            if($query_run)
            {
                header('Location:menuadd.php');
                
            }
        }

    ?>
    