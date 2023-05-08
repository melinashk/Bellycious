<html>
<head>
    <title>Restaurant Status</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>
     <header>
        <div class="left_area">
            <img src="photos/admin.png" class="bellycious">
            <a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i><span>HOME</span></a>
            <a href="menuview.php"><i class="fa fa-table" aria-hidden="true"></i><span>MENU</span></a>
            <a href="employeeview.php"><i class="fa fa-id-badge" aria-hidden="true"></i><span>STAFF</span></a>
            <a href="feedbackview.php" class="act"><i class="fa fa-comments" aria-hidden="true"></i><span>FEEDBACK & NEWS</span></a>
        </div>
        <div class="right_area">
            <a href="homepage.php"><span>LOG OUT</span></a>
        </div>
    </header>
        <div class="mainp">
        <h1>Restaurant Status</h1>
        <div class="bar">
            <ul>
                <span class="cont">
                    <li ><a href="feedbackview.php">View Feedback</a></li>
                    <li><a href="newsadd.php">Add News</a></li>
                    <li><a href="newsdelete.php">Delete News</a></li>  
                    <li  class="active"><a href="open.php">Open/ Close</a></li>
                </span>
            </ul>
        </div>
    
    
    
   <center>
        
        <form action="" method="POST" >
            <table>
                <thead>
                    <tr>
                        <th>Today's Status</th>
                        <th>Change</th>
                    </tr>
                </thead>
                <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'project');
                    
                    $query = "SELECT * FROM `status` ";
                   $query_run=mysqli_query($connection,$query)or die(mysql_errno($connection));
                    
                   while($row=mysqli_fetch_array($query_run))
                   {
                       ?>
                        <tr>
                            <td><?php echo $row['open'];?></td>
                            <td class="try"><a href = "uopen.php?update=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">Change</a> </td>
                        </tr>
                        <?php
                   }
                    


                ?>
            </table>
        
        </form>
           
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