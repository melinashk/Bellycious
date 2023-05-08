<?php
if(isset($_GET['delete']))
{
        $delete_id=$_GET['delete'];
                        
         $connection=mysqli_connect("localhost","root","","project");             
        $query="DELETE FROM employee WHERE id=$delete_id ";
        $query_run=mysqli_query($connection,$query);
                        
        if($query_run)
        {
            header('Location:employeedelete.php');
         }
}
    ?>