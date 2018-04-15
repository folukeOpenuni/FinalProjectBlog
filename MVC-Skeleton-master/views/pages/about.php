<style>
    html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
    /* Three columns side by side */
.column {
    float: left;
    
    margin-bottom: 16px;
    padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
/*@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}*/

/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    
}

/* Some left and right padding inside the container */
.container {
    padding: 0px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
}

.button:hover {
    background-color: #555;
}
.img{
    height: 50px;
}

</style>
<!--HEADER CAROUSEL-->
<div id="headercarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active text-overlay">
        <div class="text-overlay">
        <img class="d-block w-100" src="views/images/views.jpg" alt="guy looking over a bay">
        <div class="text-centered">About Me!</div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="text-overlay"> 
        <img class="d-block w-100" src="views/images/waterfall.jpg" alt="couple at waterfall">
        <div class="text-centered">About Me!</div>
        </div>
   </div>
   <div class="carousel-item">
      <div class="text-overlay">  
      <img class="d-block w-100" src="views/images/travel.jpg" alt="friends travelling">
      <div class="text-centered">About Me!</div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headercarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headercarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>        
<br>
<br>
<!--3 Meet the team-->
<center>
    <div class="container-fluid">
<div class="row" >
  <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card">
      <img src="views/images/profilepicture/john.jpg" alt="John" style="width:100%;height:200px">
      <div class="container">
        <h3>John Murray</h3>
        <p class="title">Writer</p>
        <p>Placeholder: Link to bio in database</p>
        <p><a href="mailto:john@gapyahblog.com">john@gapyahblog.com</a></p>
        <p><button class="button">See My Posts</button></p>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card">
      <img src="views/images/profilepicture/andreas.jpg" alt="Andreas" style="width:100%;height:200px">
      <div class="container">
        <h3>Andreas Orset</h3>
        <p class="title">Adventurer</p>
        <p>Placeholder: link to bio in database</p>
        <p><a href="mailto:andreas@gapyahblog.com">andreas@gapyahblog.com</a></p>
        <p><button class="button">See My Posts</button></p>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card">
      <img src="views/images/profilepicture/penny.jpg" alt="Penny" style="width:100%;height:200px">
      <div class="container">
        <h3>Penny Yiota</h3>
        <p class="title">Meglomaniac</p>
        <p>Placeholder: Link to bio in database</p>
        <p><a href="mailto:penny@gapyahblog.com">penny@gapyahblog.com</a></p>
        <p><button class="button">See My Posts</button></p>
      </div>
    </div>
  </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card">
      <img src="views/images/profilepicture/kiera.jpg" alt="Kiera" style="width:100%;height:200px">
      <div class="container">
        <h3>Kiera Kenney</h3>
        <p class="title">Foodie</p>
       <p>Placeholder: link to bio in database</p>
        <p><a href="mailto:kiera@gapyahblog.com">kiera@gapyahblog.com</a></p>
        <p><button class="button">See My Posts</button></p>
      </div>
    </div>
  </div>
</div>
    </div>
</center>

