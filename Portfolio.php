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
</style>
        <title>KhweziLomso | Online-Study</title>
    </head>
    <body>
           <!--Navbar-->
    <?php require_once('navbar.php') ?>
 <div>
    <h4>Welcome to the online studying page</h4>
    <p>There is alot happening in the world right now.The Corona Virus is a world wide pandemic which has made most countries close schools and do social distancing since the virus spreads through tiny droplets.We as the school have decide to create this because the children need to study even though they are at home.</p>
    <p>This part of the website is made to make children catch up on what they should have been doing ifbthe schools were open.We have made the videos go in a way that they go according to the school carriculum.So we hope that you use this website.</p>
    </div>
    
    <!--Footer-->
    <?php require('Footer.php'); ?>
    </body>
    <script>
        function move(){
            window.location.href = "http://khwezilomso.000webhostapp.com/Study.php";
        }
    </script>
</html>