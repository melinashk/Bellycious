<?php

$conn=mysqli_connect("localhost","root","","project");
$query="SELECT * FROM `menu`";
$query_run=mysqli_query($conn,$query);
?>

<select>

<?php
 
while($row = mysqli_fetch_array($query_run))
{
    ?>
    <option><?php echo $row['name'];?></option>
    <?php
}
    ?>


</select>