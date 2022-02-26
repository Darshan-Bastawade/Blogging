<?php
session_start();

include ("config.php");
?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  
   <title>MR DB'S Blogging Site</title>
  </head>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/blogging%20site/Images/logo2.jpg"  style="margin-left: 15px;width:30px;height:30px;border-radius:0px;"
            >
        </a>
        <a class="navbar-brand" href="index.php" style="margin-left: 20px; color: white;">MR DB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="margin-left: 20px; color: white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="all_blogs.php" style="color: white; margin-left: 10px;">All Blogs</a>
            </li>
           
           
          </ul>
          <?php
            
  if(isset($_SESSION["admin"]))
  {
    ?>
    <a href="logout.php" type="button" class="btn btn-primary">Hello <?php echo $_SESSION['admin'];?> Logout</a></button>
<?php 
  }
?>

          
        </div>
      </div>
    </nav>

  </header>