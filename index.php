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

    <!--Icon for Website or Favicon-->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">

    <!--FontawesomeCDN-->
<script src="https://kit.fontawesome.com/dde0536cff.js" crossorigin="anonymous"></script>

    <title>KhweziLomso | Home</title>
</head>
<body>
    <!--Redirect-->
    <?php 
    function redirect(){
    header("location : http://khwezilomso.000webhostapp.com/index.php");
    }
    ?>
   <!--Navbar-->
    <?php require_once('navbar.php') ?>
    
      <!--Image Slider-->
         <?php require('slider.php') ?>

<!--About-->
<section id="About">
  <div class="container">
  <h3>About our school</h3>
<div class="info">
<p>Our school is a school that focuses on your child's performance. We assist the child to find what they can do best, so they can have a great job or career.
Not only that but we have sports like Basketball,Soccer and chess which can help a child physically and mentally.
We also have companies that sponsor our school just like Telkom.
</p>
<p>
Telkom helps our children by giveing them a state of the art computer lab.
Telkom also gave our children laptops, so that they can learn at home on online websites like BCX
They also helps by giving the children sarturday classes which they attend to go through what they did during the week. 
</p>
<h5>Press on the following button to learn more</h5>
<a href="About.php"><button type="button" class="btn btn-primary">Learn more</button></a>
</div>
</div>
</section>

<!--Newsletter-->
<section id="newsletter">
<div class="container background">
    <h3>Newsletter</h3>
</div>
<div class="info">
<p>Sign up to our website inorder to be the first to receive news about whats happening at our school.
</p>
<p> Sign up now so you can receive Emails.
</p>
<div class="form">
    <form action="sign-mail.php" method="post">
     <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email">
     <button  type="submit" class="btn btn-primary ">Submit</button>
    </form>
</div>
</div>
</section>

<!--Get in touch with us-->
<section id="contact">
  <div class="container">
    <h1>Get in touch</h1>
    <div class="row">
      <div class="col-md-6">
          <form action="Message.php" method="POST" class="contact-form">
            <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Your name">
            </div>
            <div class="form-group">
            <input name="number" type="number" class="form-control" placeholder="Phone no.">
            </div>
            <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
            <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="redirect()">SEND MESSAGE</button>
          </form>
      </div>
        <div class="col-md-6 contact-info">
        <div class="follow">
          <b>Address:</b><i class="fas fa-map-marker-alt"></i> Johnson Road , Zwide
        </div>
        <div class="follow">
          <b>Phone:</b><i class="fas fa-phone"></i>0647322910
        </div>
        <div class="follow">
          <b>Email:</b><i class="fas fa-envelope"></i>KhweziLomso@gmail.com
        </div>
        <div class="follow">
          <label><b>Follow us </b></label>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-telegram"></i></a>
        </div>
      </div>
    </div>
  </div>
<!--Footer-->
<?php include_once('Footer.php'); ?>
</body>
<script src="script.js">
</script>
</html>