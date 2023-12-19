<!DOCTYPE html>
<html lang="en">

<head>
<title>Vision board</title>
  <meta charset="utf-8">
  <meta http-equive="X-UA-comatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Vision2023</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#Healthy lifestyle">Healthy lifestyle</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#Projects">Projects</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#Travels">Travels</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/home.jpg" alt="home1">
      <div class="carousel-caption d-none d-md-block">
    <h3>I hope</h3>
    </div>
</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home2.jpg" alt="home2">
      <div class="carousel-caption d-none d-md-block">
    <h3>this will</h3>
    </div>
</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home3.jpg" alt="home3">
      <div class="carousel-caption d-none d-md-block">
    <h3>be happen</h3>
    </div>
  </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="Healthy lifestyle">
<section class="my-4">
<div class="py-4">
<h2 class="text-center">Healthy lifestyle</h2>
</div>
<div class="container-fluid">
<div class="row"></div>
<div class="container-fluid">
<div class="row">
<div class="co1-1g-4 col-md-4 co1-12">
<img src="images/healthy1.jpg" class="img-fluid pb-3">
</div>
<div class="col-1g-4 col-md-4 col-12">
<img src="images/healthy2.jpg" class="img-fluid pb-3">
</div>
<div class="co1-1g-4 col-md-4 co1-12">
<img src="images/healthy3.jpg" class="img-fluid pb-3">
<div class="row">
</div>
</div>
</div>
</section>
</a>

<a id="Projects">
<section class="my-4">
<div class="py-4">
<h2 class="text-center">Projects</h2>
</div>
<div class="container-fluid">
<div class="row"></div>
<div class="container-fluid">
<div class="row">
<div class="co1-1g-4 col-md-4 co1-12">
<img src="images/project1.jpg" class="img-fluid pb-3">
</div>
<div class="col-1g-4 col-md-4 col-12">
<img src="images/project2.jpg" class="img-fluid pb-3">
</div>
<div class="co1-1g-4 col-md-4 co1-12">
<img src="images/project3.jpg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>
</a>

<a id="Travels">
<section class="my-4">
<div class="py-4">
<h2 class="text-center">Travels</h2>
</div>
<div class="container-fluid">
<div class="row"></div>
<div class="container-fluid">
<div class="row">
<div class="co1-1g-4 col-md-4 co1-12">
<img src="images/tr1.jpg" class="img-fluid pb-3">
</div>
<div class="col-1g-4 col-md-4 col-12">
<img src="images/tr2.jpg" class="img-fluid pb-3">
</div>
<div class="co1-1g-4 col-md-4 co1-12">
<img src="images/tr3.jpg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>
</a>

<a id="contact">
<section class="my-4">
<div class="py-4">
<h2 class="text-center">contact</h2>
</div>
<div class="w-50 m-auto">
<form action="about.php" method="post">
<div class="form-group">
<label>Name:</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label>Email:</label>
<input type="email" name="email" class="form-control">
</div>
<div class="form-group">
<label>Number:</label>
<input type="text" name= "number" class="form-control">
</div>
<button type="submit" class="btn btn-success">submit</button>
</form>
</div>
</section>
</a>

<a id="About">
<section class="my-4">
<div class="py-4">
<h2 class="text-center">About</h2>
</section>
</a>

<div class="container-fluid">
<p class="text-center"><b>A vision board is a collection of images and words that inspire and motivate you to reach your goals.
</b></p>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>