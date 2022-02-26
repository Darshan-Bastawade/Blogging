<!doctype html>
<html lang="en">



<body>
  <?php
  include ("header.php");
  include ("config.php");



  $sql="SELECT * FROM post";

  $result=mysqli_query($conn,$sql) or die("Query Failed");
  

  if(mysqli_num_rows($result)>0)
  {
    while ($row=mysqli_fetch_assoc($result))
    {
      $id=$row["post_id"];
      $category=$row["category"];
      $blog=$row["post_des"];
      $author=$row["author"];
      $blog_title=$row["post_title"];
      
   
  ?>
  <!--1 st row-->
  <div class="card" style="width: 18rem; margin: 20px;  float: left; margin-left: 20px; ">
    <img  style="height:30vh" src="Images/<?php echo $category;?>.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text"><?php //echo substr($blog,0,80);
      
      echo "$blog_title";?> </p>
  
  <a href="display_blog.php?id=<?php echo $id;?>" button type="button" class="btn btn-secondary" >Read More </a></button>
     
      
    </div>
  </div>
 

<?php
    }}
include ("footer.php");
?>
</body>

</html>