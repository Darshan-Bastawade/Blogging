<?php 

include ("header.php");
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR DB'S Blogging Site</title>
    <style>
        table
        {
            border-spacing:0;
            width:100%;
            border: 1px solid #ddd;
        }
       
        table td,thead
        {
        
            width:100px;
        }

       
    </style>
</head>
<body>
    <table class="table table-striped" style="width:auto; margin-top:12vh;margin-left:auto;margin-right:auto;">
    <thead>
    <tr >
    <th>Sr No</th>
    <th>Username</th>
    <th >Action</th>
    </tr>
    </thead>
    <?php 
    $sql="SELECT * FROM users";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if(mysqli_num_rows($result)>0)
    {
        $no=1;
        while ($row=mysqli_fetch_assoc($result))
        {
            $id=$row["user_id"];
            $username=$row["username"];
       
    ?>
    <tr>
   <td style="padding:15px 15px;width:150px;">
   <?php echo $no;?>
   </td>
   <td style="padding:15px 5px;width:150px;"> 
   <?php echo $username;?>
   </td>
   
   <td style="padding:15px 5px;width:100px;">
   <form action="" method="post">
   <input type="hidden" name="username" value="<?php echo $username; ?>"/>
   </form>
   <a href="delete_user.php?id=<?php echo $id;?>&username=<?php echo $username;?>" onclick="return confirm('Are you sure you want to delete this item?');" button type="button" class="btn btn-outline-danger btn-sm" style="margin-right:50px;">Delete</button></a>
   </td>
   </tr>
</body>
</html>

<?php
$no++;
 }
}
echo ' </table>';
include ("../footer1.php");
?>