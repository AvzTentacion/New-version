<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BooststrapCSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--BootstrapJS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--Icon for Website or Favicon-->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">

    <!--FontawesomeCDN-->
<script src="https://kit.fontawesome.com/dde0536cff.js" crossorigin="anonymous"></script>
<style>
/*Team Members*/

#team{
    padding-top: 50px;
    padding-bottom: 50px;
    color:  #555;
}

h1{
    text-align: center;
    color: #555 !important;
    padding-bottom: 10px;
}

h1::after{
    content: '';
    background: #007bf0;
    display: block;
    height: 3px;
    width: 170px;
    margin: 20px auto 5px; 
}

.profile-pic{
    margin-top: 25px;
}

.profile-pic .img-box{
    opacity: 1;
    display: block;
    position: relative;
}

.profile-pic .img-box img{
    filter: grayscale(1);
}

.profile-pic .img-box img:hover{
    filter: grayscale(0);
    transition: 0.9s;
    cursor: pointer;
}

.profile-pic h2{
    font-size: 22px;
    font-weight: bold;
    margin-top: 15px;
    color: #007bf0 !important;
}

.profile-pic h3{
    font-size: 15px;
    font-weight: bold;
    margin-top: 15px;
}

#team .fab{
    height: 22px;
    width: 22px;
    color: #007bf0;
    background: #fff;
    padding: 4px;
    border-radius: 50%;
}

.img-box ul{
    padding: 15px 0;
    position: absolute;
    z-index: 2;
    bottom: 0;
    left: 50%;
    transform: rotateX(-50%);
    opacity: 0;
}

.img-box ul li{
    padding: 5px;
    display: inline-block;
}

.img-box:hover ul{
    opacity: 1;
}

.img-box ul, .img-box ul li{
    transition: 0.5s;
}

/*Wallpaper*/

.wallpaper{ 
        background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(Wallpaper.jpg);
        background-size: cover;
        background-position: center;
        height: 600px;
}
</style>
        <title>KhweziLomso | Online-Study</title>
    </head>
    <body>
           <!--Navbar-->
    <?php require_once('navbar.php') ?>
    
    <div class="wallpaper"></div>
    
    <div class="container">
<h3>Online Studying</h3>  
<p>Since we all know that the Corona Virus has struck our country.Our sponsor Telkom decided to help our children by teaching them online.They give the children assignments so that they continue like there is a normal school day.
</p>
<p>Telkom has picked a team of dedicated teachers to help our children.Here are the teachers.</p>
</div>
  
<!--Team-->
<section id="team">

    <div class="container">
      <h1>Online Team</h1>
      <div class="row">
        <div class="col-md-3 profile-pic text-center">
          <div class="img-box">
            <img src="Ndira.jpg" width="200px" class="img-responsive">
            <ul>
              <a href="#"><li><i class="fab fa-facebook"></i></li></a>
              <a href="#"><li><i class="fab fa-instagram"></i></li></a>
              <a href="#"><li><i class="fab fa-twitter"></i></li></a>
            </ul>
          </div>
          <h2>Ndiphiwe Kona</h2>
          <h3>Head of the project</h3>
          <p>He is the head of this project and runs it. </p>
        </div>
        <div class="col-md-3 profile-pic text-center">
          <div class="img-box">
            <img src="Ndira.jpg" width="200px" class="img-responsive">
            <ul>
              <a href="#"><li><i class="fab fa-facebook"></i></li></a>
              <a href="#"><li><i class="fab fa-instagram"></i></li></a>
              <a href="#"><li><i class="fab fa-twitter"></i></li></a>
            </ul>
          </div>
          <h2>Ndiphiwe Kona</h2>
          <h3>Teacher </h3>
          <p>He is the one that helps the children.He gives them answers to their questions  </p>
        </div>
        <div class="col-md-3 profile-pic text-center">
          <div class="img-box">
            <img src="Ndira.jpg" width="200px" class="img-responsive">
            <ul>
              <a href="#"><li><i class="fab fa-facebook"></i></li></a>
              <a href="#"><li><i class="fab fa-instagram"></i></li></a>
              <a href="#"><li><i class="fab fa-twitter"></i></li></a>
            </ul>
          </div>
          <h2>Ndiphiwe Kona</h2>
          <h3>Teacher</h3>
          <p>He is the one that helps the children.He gives them answers to their questions . </p>
        </div>
        <div class="col-md-3 profile-pic text-center">
          <div class="img-box">
            <img src="Ndira.jpg" width="200px" class="img-responsive">
            <ul>
              <a href="#"><li><i class="fab fa-facebook"></i></li></a>
              <a href="#"><li><i class="fab fa-instagram"></i></li></a>
              <a href="#"><li><i class="fab fa-twitter"></i></li></a>
            </ul>
          </div>
          <h2>Ndiphiwe Kona</h2>
          <h3>Teacher</h3>
          <p>He is the one that helps the children.He gives them answers to their questions . </p>
        </div>
      </div>
    </div>
  </section>
  <!--Online Redirect-->
  <section id="redirect">
      <div class="container">
          <h3>We have created a page where you can view the online study videos</h3>
          <p>Press on the following link</p>
      </div>
      <div>
          <a ><button onclick="move()" style="margin : 10px 15px" class="btn btn-primary">Study page</button></a>
      </div>
  </section>
    
    
    
    <!--Footer-->
    <?php require('Footer.php'); ?>
    </body>
    <script>
        function move(){
            window.location.href = "http://khwezilomso.000webhostapp.com/Study.php";
        }
    </script>
</html>