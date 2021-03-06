<!DOCTYPE html>
<?php session_start();
header("Content-Type: text/html; charset=ISO-8859-1");?>
<html>
    <head>
<!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <title>Gap Yah Blog</title>
<!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- STYLES CSS-->
    <link href="views/css/styles.css" rel="stylesheet" type="text/css"/>
<!--GOOGLE FONT-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Delius+Swash+Caps">

<!--<script src="formValidator.js" type="text/javascript"></script>-->
<script>
function getBudgetJS(str) {
    //document.getElementById("txtHint").innerHTML = "test";
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                //document.getElementById("txtHint").innerHTML = "test";
            }
        };
        //xmlhttp.open("GET","./controllers/ajax_controller.php?action=getBudget1",true);
        xmlhttp.open("GET","ajax.php?controller=ajax&action=getBudget&countryID="+str,true);
        //xmlhttp.open("GET","views/ajax/getBudget.php",true);
        //document.getElementById("txtHint").innerHTML = "test";
        xmlhttp.send();

    }
}
</script>
        
    
    </head>
    
    <body>
<!-- NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="?views=pages&action=home"><img style="height: 30px; width: 30px;" src="views/images/world-icon.jpg">  Gap Yah ltd.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">

            <a class="nav-link" href='?controller=pages&action=home'>Home<span class="sr-only">(current)</span></a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href='?controller=blogpost&action=readAll'>Blog</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href='?controller=user&action=getwriterdetails'>About</a>

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Continents
            </a>
            <div class="dropdown-menu" aria-labelledby="continentDropdown">

                <a class="dropdown-item" href='?controller=blogpost&action=africa'>Africa</a>
                <a class="dropdown-item" href="?controller=blogpost&action=antarctica">Antarctica</a>
                <a class="dropdown-item" href="?controller=blogpost&action=asia">Asia</a>
                <a class="dropdown-item" href="?controller=blogpost&action=australia">Australia</a>
                <a class="dropdown-item" href="?controller=blogpost&action=europe">Europe</a>
                <a class="dropdown-item" href="?controller=blogpost&action=northamerica">North America</a>
                <a class="dropdown-item" href="?controller=blogpost&action=southamerica">South America</a>

            </div>
        </li>
        <li class="nav-item">

          <a class="nav-link" href='?controller=blogpost&action=create'>Upload Post</a>

        </li>
    </ul>   
<!-- LOGIN DROP DOWN  -->                    
<div class="btn-group dropleft pr-2">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img style="height: 20px; width: 20px;" src="views/images/user.png"></button>
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="your@email.com">
                </div>        
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                    Remember me
                    </label>
                </div>
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
            </form>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="?controller=user&action=create">Register</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
        </div>
</div>     
 
<!--SEARCH BAR-->
    <form class="form-inline my-2 my-lg-0" action="?controller=blogpost&action=find" method="post" name="formname" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search blog posts"aria-label="Search" name="name">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit" value = "search">Search</button>
     
<?php 
//if(isset($_POST['name'])){
       //Ione changed to GET from POST
      //  if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
      //$name=$_POST['name'];}}?>

    </form>
  </div>
</nav>      
<!--SESSION BAR
    <div id="guestBox" class="text-right"> 
        <?php          
//            if(!empty($_SESSION)){
//                echo "Hey there" . $_SESSION['Email'];
//            }   
//            if (empty($_SESSION)){
//              echo "Hey future Gap Yah Plannah";
//            }
        ?>
    </div> -->

    <?php require_once('routes.php'); ?>

<!--FOOTER-->
<footer class="page-footer bg-f">
    <div class="container-fluid text-center">
    <div class="row">

<!--FIRST FOOTER COL-->
        <div class="col-md-3">
            <h5>Get in touch</h5>
            <p>Call: 0113 2234455</p>
            <p>Email: <a href="mailto:hello@gapyah.com" style="color:white">hello@gapyah.com</a></p>
        </div>
<!--SECOND FOOTER COL-->
        <div class="col-md-3">
            <h5>Log into our online community</h5>
            <br>
            <!--< commented the below line out because we can't have href for a button -->
            <!--<button type="button" class="btn btn-lg btn-light" href='?controller=user&action=create'>Sign up</button> -->
            <button type="button" class="btn btn-lg btn-light" onclick="window.location='?controller=user&action=authenticate';">Login</button>
            <!--window.location='http://www.example.com';-->
        </div>
<!--THIRD FOOTER COL-->
        <div class="col-md-3">
            <h5>Join our online community</h5>
            <br>
            <!--< commented the below line out because we can't have href for a button -->
            <!--<button type="button" class="btn btn-lg btn-light" href='?controller=user&action=create'>Sign up</button> -->
            <button type="button" class="btn btn-lg btn-light" onclick="window.location='?controller=user&action=create';">Sign up</button>
            <!--window.location='http://www.example.com';-->
        </div>
<!--FOURTH FOOTER COL-->
        <div class="col-md-3 text-center">
            <h5>Featured posts</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="?controller=blogpost&action=read&BlogPostID=20" style="color:white">Making Do in Peru</a>
                    </li>
                    <li>
                        <a href="?controller=blogpost&action=read&BlogPostID=17" style="color:white">Smooth Talking in Amman, Jordan</a>
                    </li>
                    <li>
                        <a href="?controller=blogpost&action=read&BlogPostID=18" style="color:white">Calgary’s epic foodie scene</a>
                    </li>
                </ul>
        </div>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>