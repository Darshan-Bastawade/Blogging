<?php
include ("header.php");
include ("config.php");

if(isset($_GET['id']))
{
    $id=$_GET["id"];
    if (isset($_POST["btn_save"]))
    {
        $category=$_POST["category"];
        $blog_title=$_POST["blog_title"];
        $blog=$_POST["text_blog"];

        $sql2="UPDATE `post` SET `category`='$category', `post_title`='$blog_title', `post_des`='$blog' WHERE `post_id`='$id'";
        if(mysqli_query($conn,$sql2) or die(mysqli_error($conn)))
        {
            header("Location:http://localhost/blogging%20site/blogs.php");
        }

    }
   
    
    $sql="SELECT * FROM post WHERE post_id= '{$id}'";
    
    $result=mysqli_query($conn,$sql) or die("Error".mysqli_error($conn));
    
    while($finalres=mysqli_fetch_array($result))
    {
        $id=$finalres["post_id"];
        $category=$finalres["category"];
        $blog_title=$finalres["post_title"];
        $blog=$finalres["post_des"];
    


?>
<style>
    .container
{
    
    border: 1px solid #ffa500;
    box-shadow: gray 1px 1px 20px;
    border-radius: 10px #ffa500;
    width: 45vh;
    min-height: 77vh;
    margin: auto;
}
</style>
<body>

<div class="container" style="margin-top:15px">
<label  style="width:100%; margin-top:10px; text-align:left;" class="btn btn-warning" >Add Blog</label>
<div class="row g-2">
  <div class="col-md">
  <form action="" method="post">
    <div class="form-floating">
        
      <select class="form-select" id="category" name="category" aria-label="Floating label select example" style="margin-top:10px">
        
        <option value="1"<?php if($finalres['category']==1) echo 'selected="selected"';?>>Coding </option>
        <option value="2"<?php if($finalres['category']==2) echo 'selected="selected"';?>>Personal </option>
        <option value="3"<?php if($finalres['category']==3) echo 'selected="selected"';?>>Business </option>
        <option value="4"<?php if($finalres['category']==4) echo 'selected="selected"';?>>Fashion </option>
        <option value="5"<?php if($finalres['category']==5) echo 'selected="selected"';?>>Lifestyle </option>
        <option value="6"<?php if($finalres['category']==6) echo 'selected="selected"';?>>Food  </option>
      
      </select>
      <label for="floatingSelectGrid">Select Blog Category</label>
    </div>
  </div>
</div>
<input type="text" style="width:100%;" name="blog_title" id="blog_title" placeholder="" value="<?php echo $blog_title; ?>" required>
<textarea name="text_blog" id="text_blog" name="text_blog" cols="31" rows="10" style="margin-top:10px" placeholder="Start Typing Your Blog Here.." required><?php echo $blog;?></textarea>
<hr>
<input type="submit" name="btn_save" id="btn_save" class="btn btn-warning" style="" value="Save">
</form>
</div>

</body>
</html>

<?php
}
}
include ("footer1.php");
?>