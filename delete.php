<?php 
 include "connection.php";

 $deleteID=$_GET['id'];

$delete= "delete from jobapplication where id=$deleteID";
mysqli_query($con,$delete);

header('location:display.php')

?>