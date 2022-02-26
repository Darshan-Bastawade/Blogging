<?php
session_start();
//include ("header.php");
include ("config.php");
if (isset($_SESSION['username']))  
{
  header("Location:http://localhost/blogging%20site/index.php");
    echo '<div class="alert alert-warning" role="alert">';
 echo 'Please Logout Then login';
echo '</div>';
}
  
else
{
    if(isset($_POST['btn_login']))
    {
        
    $username=$_POST['username'];
    $password=$_POST['password'];

    if ($username == "admin" && $password=="#23235@")
    {
        session_start();
        $_SESSION['admin']="admin";
        header("Location:http://localhost/blogging%20site/admin/index.php");
    }
    else
    {
        echo "Username and password mismatch";
    }
    }
?>


<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  
   <title>MR DB'S Blogging Site</title>
  </head>
<link rel="stylesheet" href="../css/style.css">

 

<body>
        <div class="container" style="margin-top:130px;border-radius:10 px blue;">
            
            <label  style="width:100%; margin-top:10px; text-align:left" class="btn btn-primary" >Sign in</label>
            <form action="" method="post">
                <input name="username" type="text" style="background:none; border:none;" class="form-control" id="user-name" placeholder="Username" required>
               
                <input name="password" type="password"  style="margin-top:10px; background:none; border:none;" class="form-control" id="password" placeholder="Password" required>
               
                <input name="btn_login" class="btn btn-primary" style="margin-left:5vh" type="submit" value="Login"/>
             </form>
                <hr>   
        
        </div>
      
    
</body>
</html>
<?php
} 
?>

