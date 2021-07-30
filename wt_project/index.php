<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Cafe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Cafe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cafe-building.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Cafe Building</h3>
    <p>Peaceful With Open Space!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/library-cafe.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Staff</h3>
    <p>We have such a great time serving our guest and see them learn</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/internet-cafes.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Entertainment</h3>
    <p>This cafe is not only for learners but also for those who want to make their mind fresh.</p>
    </div>
  </div>
</div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/cafe-logo.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h3>From Manager</h3>
<p class="py-3">My Cafe is a cafe where you can not only get your coffee or lunch but also knowledge. we have varities of educational books just as you can find in any library. You can share your ideas with like minded people and discuss with them . Or if you like your reading in privacy you can also book private booth for your study. Our cafe is not just for studying but also for entertainment . You can also find comics and mangas in our archives. You can use our cyber space for computer usage where you can use computer for studying to playing games . 
    !!Hope You Enjoy My Cafe!!</p>
<a href="about.php" class="btn btn-success">check more</a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile </label>
        <input type="text" name="mobile" class="form-control">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea name="comment" class="form-control">
          </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>
  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">My Cafe , Learn While You Eat.</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html