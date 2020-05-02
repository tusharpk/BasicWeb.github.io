<?php 
$connect=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno($connect))
{

 echo 'database connection error'.mysqli_connect_errno();
}
?>