<?php header("Content-Type: text/html; charset=ISO-8859-1");?>

<!--HEADER CAROUSEL-->
<div id="headercarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="text-overlay">
        <img class="d-block w-100" src="views/images/views.jpg" alt="guy looking over a bay">
        <div class="text-centered">On my Gap Yah...</div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="text-overlay"> 
        <img class="d-block w-100" src="views/images/waterfall.jpg" alt="couple at waterfall">
        <div class="text-centered">On my Gap Yah...</div>
        </div>
   </div>
   <div class="carousel-item">
      <div class="text-overlay">  
      <img class="d-block w-100" src="views/images/travel.jpg" alt="friends travelling">
      <div class="text-centered">On my Gap Yah...</div>
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
<!--getBudgetthing-->

<div>
<h3>Budget Plannah! Choose Country: </h3>
<form>
<select id="mySelect2" name="country" onchange="getBudgetJS(this.value)">
  <option value="">Select a country:</option>
  <option value="21">Bolivia</option>
  <option value="22">Bosnia and Herzegovina</option>
  <option value="23">Botswana</option>
  <option value="24">Brazil</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Expect Budget Plannah here...</b></div>
</div>
<!--3 IMAGE SECTION-->
        <section class="container-fluid">
            <h2 class="text-center">April's top 3 destinations</h2>
            <div class="row">
                <div class="col-md-4 col-sm-10 col-10 container">
                <a href='?controller=blogpost&action=read&BlogPostID=3'><img class="image" src="views/images/blogposts/norway.jpg" class="img-thumbnail img-responsive" width="100%">
                <div class="middle">
                <div class="text">10 Instagrammable places in Norway</div>
                </div></a>
                </div>
                <div class="col-md-4 col-sm-10 col-10 container">
                <a href='?controller=blogpost&action=read&BlogPostID=5'><img class="image" src="views/images/blogposts/sanfransico.jpg" class="img-thumbnail img-responsive" width="100%">
                <div class="middle">
                <div class="text">Top 10 cheap eats in Sanfran</div>
                </div></a>
                </div>
                <div class="col-md-4 col-sm-10 col-10 container">
                <a href='?controller=blogpost&action=read&BlogPostID=6'><img class="image" src="views/images/blogposts/greece.jpg" class="img-thumbnail img-responsive" width="100%">
                <div class="middle">
                <div class="text">My secret guide to the best beaches in Greece</div>
                </div></a>
                </div>
            </div>               
        </section>

