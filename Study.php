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
    .video-caption{
        margin-top :  7px ;
    }
    
    .videos{
        margin :  10px;
    }
    
    .other-videos{
        position: absolute;
        top: 216px;
        right: 390px;
    }
    
    @media only screen and (max-width: 600px) {
  video {
    width: 380px;
  }
}
    
    
</style>
        <title>KhweziLomso | Online-Study</title>
    </head>
    <body>
           <!--Navbar-->
    <?php require_once('navbar.php') ?>
    
    <div class="container">
        <h2>Welcome to The online study page</h2>
        <p>Here is a lesson about waves</p>
    </div>
    <div class="container">
        <h4>Physical Sciences Waves</h4>
        <br>
        <p>In physics a wave can be thought of as a disturbance or oscillation that travels through space-time, accompanied by a transfer of energy. Wave motion transfers energy from one point to another, often with no permanent displacement of the particles of the medium —that is, with little or no associated mass transport.</p>
        <p>There are two basic types of wave motion for mechanical waves: longitudinal waves and transverse waves. The animations below demonstrate both types of wave and illustrate the difference between the motion of the wave and the motion of the particles in the medium through which the wave is travelling.</p>
    </div>
    <div class="videos">
        <video width="700" controls>
  <source src="Physics(waves).mp4" type="video/mp4">
</video>
<div class="video-caption">
    <h5>Physical sciences Waves</h5>
</div class="btn">
     <button onclick="move()" class="btn btn-primary">Next Video</button>
    </div>
    
    
    
    <!--Footer-->
    <?php require('Footer.php'); ?>
    </body>
    <script>
       function move(){
            window.location.href = "http://khwezilomso.000webhostapp.com/Study(1).php";
        }
    </script>
</html>