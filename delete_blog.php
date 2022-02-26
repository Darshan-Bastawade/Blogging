<?php
    include ("config.php");
    $id=$_GET['id'];
    $sql="DELETE FROM post WHERE post_id='$id'";
    if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
    header("Location:http://localhost/blogging%20site/blogs.php");
?>