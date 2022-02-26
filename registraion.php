<?php
include ("header.php");
if(isset($_POST['register']))
{
   require("config.php");

   $username= $_POST['user-name'];
   $pass= $_POST['password'];

   $sql = "SELECT username FROM users where username='{$username}'";
   $result=mysqli_query($conn,$sql) or die("Query failed");

   if(mysqli_num_rows($result)>0)
   {
       echo "User already exists";
   }
   else
   {
       $sql1="INSERT INTO users (username,password)VALUES('$username','$pass')";
       if(mysqli_query($conn,$sql1)or die(mysqli_error($conn)))
       {
          header("Location:http://localhost/blogging%20site/login.php");
       
       }
       else
       {
           echo "User not registered";
       }
   }
}
?>
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" style="margin-top:130px;">
            <div class="mb-3">
            <label  style="width:100%; margin-top:10px; text-align:left;" class="btn btn-primary" >Sign up</label>
                <form action="" method="post">
                     <input type="email" style="background:none; border:none;" class="form-control" id="user-name" name="user-name" placeholder="Username" required>
               
                    <input type="password"  style="margin-top:10px; background:none; border:none;" class="form-control" name="password" id="password" placeholder="Password" required>
               
                    <input type="submit" name="register" class="btn btn-primary" style="margin-left:5vh" value="Register"/>
                </form>
                <hr>
                <a href="login.php" button class="btn btn-dark" style="margin-left:5vh" type="button">Login here</button></a>
        </div>
        </div>
<?php
include ("footer1.php");
?>
</body>
</html>