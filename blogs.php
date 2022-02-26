
<?php
include ("header.php");
?>

<body>
<style>
table{

  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  
},
tr td
{
width:100%;
}
</style>

<a href="addblog.php" button id="btn_add" type="button" class="btn btn-outline-dark" style="float:right; margin:20px">+ Add Blog</a></button>
<table class="table table-striped" style="width:auto; margin-top:12vh;margin-left:auto;margin-right:auto;">
   <thead>
    <tr>
        <th >Sr No</th>
        <th >Blog Title</th>
        <th >Action</th>
    </tr>
  </thead>
 
  
  
    <?php
include ("config.php");
$sql="SELECT post_id,post_des,author,category,post_title FROM post WHERE  author= '{$_SESSION['username']}'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(mysqli_num_rows($result)>0)
{
  $no=1;
  while ($row=mysqli_fetch_assoc($result))
  {
   
    $id=$row["post_id"];
    $category=$row["category"];
    $blog=$row["post_des"];
    $author=$row["author"];
    $blog_tile=$row["post_title"];
    
?>
 <tbody>
<tr>
    <td  style="padding:15px 15px;column-width:50px;"><?php echo "$no";?></td>
    <td style="padding:15px 5px;column-width:250px;">
    <?php echo "$blog_tile";?>     
    
  </td>
<td style="column-width:250px">
<a href="display_blog.php?id=<?php echo $id;?>" button type="button" class="btn btn-outline-warning btn-sm">Full Blog</a></button>
<a href="edit_blog.php?id=<?php echo $id;?>" button type="button" class="btn btn-outline-success btn-sm">Edit</a></button>
<a href="delete_blog.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure you want to delete this item?');" style="margin-left:0px" type="button" class="btn btn-outline-danger btn-sm">Delete</button>
</td>

</tr>
</tbody>

</body>
<?php
$no++;  
}}

 echo "</table>";
include ("footer1.php");
?>


