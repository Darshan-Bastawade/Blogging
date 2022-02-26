<?php 
$id = $_GET['id'];
include("config.php");
$sql="DELETE FROM post WHERE post_id='$id'";
if(mysqli_query($conn, $sql) or die(mysqli_error($conn)))
header("Location:http://localhost/blogging%20site/admin/all_blogs.php");
?>