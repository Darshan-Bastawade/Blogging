<?php 
$id=$_GET['id'];
$user=$_GET['username'];
include("config.php");
if ($_GET['username'])
{
$sql="DELETE FROM users WHERE user_id='$id'";
$sql2="DELETE FROM post WHERE author='$user'";
if(mysqli_query($conn,$sql) or die("Error"))
{
    
    if(mysqli_query($conn,$sql2) or die(mysqli_error($conn)))
    {
   echo $user;
    }
}
}
else
echo "Red ";
?>