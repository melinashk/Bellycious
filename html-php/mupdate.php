<html>
<head>
    <link rel="stylesheet" type="text/css" href="mup.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>Update Menu</title>
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
    <h1>Update Menu</h1>
    <?php  $update=$_GET['update']; ?>
    <form action="" method="POST" enctype="multipart/form-data" class="fo">
        
        <input type="hidden" name="id" value="<?php echo $update;?>"/>
        <p>Name:</p><input type="text" name="name" placeholder="Enter food name"/>
        <p>Category:</p><input type="text" name="category" placeholder="Enter category"/><br>
        <p>Price:</p><input type="text" name="price" placeholder="Enter price"/><br>
        <p>Choose food image:</p>
        <input type="file" name="image" id="image"/><br><br>
        <span><input type="submit" name="update" value="Update"/></span>
        <span><input type="reset" name="cancel" value="Cancel"/>
        </span>
        
    </form>
    
    <?php
        
        if(isset($_POST['update']))
        {
            $uid=$_POST['id'];
            $name=$_POST['name'];
            $category=$_POST['category'];
            $price=$_POST['price'];
            $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            
            $connection=mysqli_connect("localhost","root","","project");
            
            $query="UPDATE menu SET name='$name',category='$category',price='$price',image='$file' WHERE id='$uid'";
           $query_run=mysqli_query($connection,$query);
            
            if($query_run)
            {
                header('Location:menuupdate.php');
                
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