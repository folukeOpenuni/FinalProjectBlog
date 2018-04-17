<!DOCTYPE html>
<html>
    <head>
<!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gap Yah Blog</title>
<!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- STYLES CSS-->
    <link href="views/css/styles.css" rel="stylesheet" type="text/css"/>
<!--GOOGLE FONT-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Delius+Swash+Caps">
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

          <a class="nav-link" href='?controller=pages&action=about'>About</a>

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Continents
            </a>
            <div class="dropdown-menu" aria-labelledby="continentDropdown">
                <a class="dropdown-item" href="?controller=blogpost&action=africa">Africa</a>
                <a class="dropdown-item" href="#">Antarctica</a>
                <a class="dropdown-item" href="#">Asia</a>
                <a class="dropdown-item" href="#">Australia</a>
                <a class="dropdown-item" href="#">Europe</a>
                <a class="dropdown-item" href="#">North America</a>
                <a class="dropdown-item" href="#">South America</a>
            </div>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search blog posts" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>      

    <?php require_once('routes.php'); ?>

<!--FOOTER-->
<footer class="page-footer bg-f">
    <div class="container-fluid text-center">
    <div class="row">

<!--FIRST FOOTER COL-->
        <div class="col-md-4">
            <h5>Get in touch</h5>
            <p>Call: 0113 2234455</p>
            <p>Email: <a href="mailto:hello@gapyah.com" style="color:white">hello@gapyah.com</a></p>
        </div>
<!--SECOND FOOTER COL-->
        <div class="col-md-4">
            <h5>Join our online community</h5>
            <br>
            <button type="button" class="btn btn-lg btn-light" href="#">Sign up</button>
        </div>
<!--THIRD FOOTER COL-->
        <div class="col-md-4 text-center">
            <h5>Featured posts</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" style="color:white">How to prepare for 6 months traveling</a>
                    </li>
                    <li>
                        <a href="#" style="color:white">8 reasons to visit South East Asia in 2018</a>
                    </li>
                    <li>
                        <a href="#" style="color:white">How to budget Down Under</a>
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