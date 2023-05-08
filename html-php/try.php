<html>
<head>
    <title>try</title>
</head>
<body>
    <form action="" method="POST" target=_self>
        <input type="number" name="id">
        <p>name:</p><input type="text" name="name" placeholder="Enter news"/><br><br>
        <span><input type="submit" name="add" value="Add"/></span>
    </form>
    
    <?php
        
        if(isset($_POST['add']))
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
                
            $connection=mysqli_connect("localhost","root","","project");
            
            $query = "SELECT * FROM `employee` WHERE id='$id' LIMIT 1 ";
            $result=mysqli_query($connection,$query);
            $user=mysqli_fetch_assoc($result);
            
            if($user)
            {
                if($user['id']===$id){
                    echo "problem";
                    
                }
            }
            else{
                 echo "no problem";
                
            }
            
           
        }

    ?>
    
</body>
</html>