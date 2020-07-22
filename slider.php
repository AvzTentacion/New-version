<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--BooststrapCSS-->
    <link rel="stylesheet" href="static/bootstrap.css">
    
    <!--BootstrapJS-->
   <script src="static/boostrap(1).js"></script>
   <script src="static/boostrap(2).js"></script>
   <script src="static/boostrap(3).js"></script>
    <!--MyOwnCSS-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Fam.jpg" class="d-block w-100 img-fluid" alt="Fam">
      <div class="carousel-caption">
        <h5>We have the best teachers</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Ramos.jpg" class="d-block w-100" alt="Ramos">
      <div class="carousel-caption">
        <h5>We have the best teachers</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Fam2.jpg" class="d-block w-100" alt="Fam2">
      <div class="carousel-caption">
        <h5>We have the best teachers</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</body>
</html>
