<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BooststrapCSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--BootstrapJS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--MyOwnCSS-->
    <link rel="stylesheet" href="style.css">

    <!--Icon for Website or Favicon-->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">

    <!--FontawesomeCDN-->
<script src="https://kit.fontawesome.com/dde0536cff.js" crossorigin="anonymous"></script>

<style>
    .wallpaper{ 
        background-image: url(soccer-ball-on-grass-field-during-daytime-46798.jpg);
        background-size: cover;
        background-position: right;
        height: 400px;
}
</style>

    <title>KhweziLomso | Home</title>
</head>
<body>

   <!--Navbar-->
    <?php require_once('navbar.php') ?>
    
    <div class="wallpaper">
         
    </div>
    
<section id="Sport">
    <div class="container">
        <h2>Sport</h2>
        <div class="words">
            <p>At our school we have different sports so that your child doesn't only excel in his or her studies but also on sports. Playing sports reduces stress like when it's time for exams.Sports also build leaders in a team people need to work together so that their team can be able to win so sport teaches team work.</p>
            <h4>Here are the sports that we have at our school</h4>
        </div>
      <div class="sports">
         <div class="row">
             <div class="col-sm-6">
                 <div class="topic">
                     <h4>Basketball</h4>
                 </div>
                 <img src="photo-of-man-doing-dunk-2834921.jpg" width="300px">
             </div>
             <div class="col-sm-6">
                 <div class="explain-sport">
                     <p>Basketball a sport that is played using hands.People have to shoot in order to receive points.The coach of this sport at our school is Mr Kona.</p>
                 </div>
             </div>
         </div> 
      </div>
    </div>
</section>
<!--Footer-->
<?php include_once('Footer.php'); ?>
</body>
<script src="script.js">
</script>
</html>