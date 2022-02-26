<?php
include ("header.php");
if(!isset($_SESSION['admin']))
{
if(isset($_POST['btn_login']))
{
    include ("config.php");

    $username= $_POST['username'];
    $pass= $_POST['password'];

    $sql = "SELECT username,password FROM users WHERE username='{$username}' AND password='{$pass}'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error());

    if(mysqli_num_rows($result)>0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            session_start();
            $_SESSION["user_id"]=$row['user_id'];
            $_SESSION["username"]=$row['username'];

            header("Location:http://localhost/blogging%20site/index.php");
        }
    }
    else
    {
        echo "Username and Password mismatched";
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
            <label  style="width:100%; margin-top:10px; text-align:left" class="btn btn-primary" >Sign in</label>
            <form action="" method="post">
                <input name="username" type="email" style="background:none; border:none;" class="form-control" id="user-name" placeholder="Username" required>
               
                <input name="password" type="password"  style="margin-top:10px; background:none; border:none;" class="form-control" id="password" placeholder="Password" required>
               
                <input name="btn_login" class="btn btn-primary" style="margin-left:5vh" type="submit" value="Login"/>
             </form>
                <hr>
                <a button href="registraion.php" class="btn btn-dark" style="margin-left:5vh" type="button">Create Account</a></button>
        </div>
        </div>
      
    
</body>
</html>
<?php
}
else 
{
    header("Location:http://localhost/blogging%20site/admin/index.php");
    echo "Please Logout then Login";
}
include ("footer1.php");
?>

