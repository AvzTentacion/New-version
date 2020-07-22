<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap-->
        <link rel="stylesheet" href="static/bootstrap.css">


       <style>
           h3{
               text-align: center;
           }
           form{
               display: inline-block;
               background-color: rgb(0,100,200);
               width: 35%;
               padding: 50px;
               border-radius: 20px;
           }
           label{
               color: white;
           }
           button{
            color: white;
               
           }
           span{
               color: white;
           }
       </style>

       <title>Khwezi Lomso | Codanathi Quiz</title>
</head>
<body>
    <?php require_once('navbar.php')?>
    <h3>CodaNathi Quiz</h3>
  <div style="text-align: center;" class="form">
  <form  action="" method="post" onsubmit="return false">
    <div id="phase1">
    <h3 style="color : white;">Before we start the quiz we need your basic info </h3>

        <label for="firstname">
        Firstname :<input class="form-control" width="70%" type="text" name="firstname" id="firstname">
        </label><br>
        <label for="lastname">
            Lastname: <input class="form-control" type="text" name="lastname" id="lastname">
        </label>
        <label for="email">
            Email: <input class="form-control" type="email" name="email" id="email">
        </label>
        <label for="cellnumber">
            Cellnumber: <input class="form-control" type="tel" name="cellnumber" id="cellnumber"><br>
        </label>
        <div style="display: text-align: center;" class="x">
    <button onclick="processPhase1()" class="btn btn-primary">Continue</button>
    </div>
    </div>
    <div id="phase2">
    <h3 style="color : white;">Before we start the quiz we need your basic info </h3>

        <label for="parentname">
        Parent's Name :<input class="form-control" width="70%" type="text" name="parentname" id="parentname">
        </label><br>
        <label for="parentname">
           Parent's Lastname: <input class="form-control" type="text" name="parentsurname" id="parentsurname">
        </label>
        <label for="parentid">
            Parent's Id Number: <input class="form-control" type="number" name="parentid" id="parentid">
        </label>
        <label for="parentcell">
            Parent's Cellnumber: <input class="form-control" type="tel" name="parentcell" id="parentcell">
        </label><br>
    <button onclick="processPhase2()" class="btn btn-primary">Continue</button>
    </div>
    <div id="show_data">
    <h3 style="color: white;">Before we continue confirm that this is the right informartion</h3>
      <span>Firstname :</span> <span id="display_firstname"></span><br>
      <span>Lastname : </span> <span id="display_lastname"></span><br>
      <span>Email :</span> <span id="display_email"></span><br>
      <span>Cellnumber :</span> <span id="display_cellnumber"></span><br>
      <span>Parent's name :</span> <span id="display_parentname"></span><br>
      <span>Parent's surname :</span> <span id="display_parentsurname"></span><br>
      <span>Parent's Id Number :</span> <span id="display_parentid"></span><br>
      <span>Parent's Cellnumber:</span> <span id="display_parentcell"></span><br>
      <label for="aproove">
      Yes,this is my data <input onclick="aprooved()" style="width: 15px;" class="form-control" type="checkbox" name="aproove" id="aproove">
      </label><br>
      <label for="continue">
      <button id="dis" class="btn btn-primary" onclick="submit()">Continue</button>
      </label>
    </div>
    <div id="phase4">
    <h3 style="color : white;">Now Lets start the quiz</h3>

        <label for="firstname">
        1. Name 2 versions of windows that you know :<input class="form-control" width="70%" type="text" name="firstname" id="firstname">
        </label><br>
        <label for="lastname">
        2. Who is Mark Zuckerberg : <input class="form-control" type="text" name="lastname" id="lastname">
        </label>
        <label for="email">
        3. What is coding : <input class="form-control" type="text" name="email" id="email">
        </label>
        <label for="cellnumber">
            Cellnumber: <input class="form-control" type="tel" name="cellnumber" id="cellnumber">
        </label><br>
    <button onclick="processPhase3()" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </form>  
  
<script src="static/script.js"></script>
<script src="static/bootstrap(1).js"></script>
<script src="static/bootstrap(2).js"></script>
<script src="static/bootstrap(3).js"></script>
</body>
</html>