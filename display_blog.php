<?php 
include ("header.php");
include ("config.php");


if(isset($_GET["id"]))
{
$id=$_GET["id"];
$sql="SELECT post_id,post_des,author,category,post_title FROM post WHERE post_id= '{$id}'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(mysqli_num_rows($result)>0)
{

  while ($row=mysqli_fetch_assoc($result))
  {
   
    $id=$row["post_id"];
    $category=$row["category"];
    $blog=$row["post_des"];
    $author=$row["author"];
    $blog_tile=$row["post_title"];
?>
<style>
.content {

   max-width: 900px;
  /* margin: 0 auto;*/
  margin-left:auto;
  margin-right:auto;
  margin-top:50px;
   overflow: hidden;
   padding: 2em;
   background: white;
   @include box-shadow(0 0 2px 0 rgba(0,0,0,0.1));
   @include transition(all 400ms ease);

   h1 {
      font-weight: 800;
      margin-top: 1em;
      line-height: 2;
   }
  
   p {
      line-height: 1.8;
      margin: 1em 0;
      font-size: 0.9em;
      font-weight: 400;
   }
}

</style>
<div class="content">
    <h1><?php echo $blog_tile;?></h1>
    <p>
    <?php echo "$blog";?>
    </p>
    <h5 style="text-align:right;">Written by <?php echo "$author";?></h5>
</div>
<?php 
   }}}
   else
   {
      echo "Error";
   }
  
include ("footer1.php");
?>