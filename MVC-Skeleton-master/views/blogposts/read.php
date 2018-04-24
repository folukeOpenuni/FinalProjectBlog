<style>
    .avatar {
    vertical-align: middle;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
    
</style>

<div class="text-white text-overlay blog-img">
  <img class="img-fulid blog-img" src="views/images/blogposts/<?php echo $blogpost->Image; ?>">
    <h1 class="text-centered"><?php echo $blogpost->Title; ?></h1>
    <br>
    <br>
    <p class="text-subhead">Date Published: <?php echo $blogpost->DatePublished; ?></p>
</div>
<br>
<br>
<center>

    <img src="views/images/profilepicture/<?php echo $blogpost->WriterFName;?>.jpeg" alt="Avatar" class="avatar">
    <br>
    <br>
    <p>Written by <?php echo $blogpost->WriterFName;?></p>

<div class="jumbotron">
<p><?php echo $blogpost->ContentP1; ?></p>

<H2><i>"I don't trust words, I trust pictures"</i> - Gilles Peress</H2>
<p>Take a look for yourself through the eyes of a lens...</p>

<?php 
//$file = 'views/images/' . $blogpost->Image1;
//if(file_exists($file)){ ?>
<!--IMAGE CAROUSEL-->
<div id="blogpostimages" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#blogpostimages" data-slide-to="0" class="active"></li>
    <li data-target="#blogpostimages" data-slide-to="1"></li>
    <li data-target="#blogpostimages" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="views/images/blogposts/<?php echo $blogpost->Image1; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="views/images/blogposts/<?php echo $blogpost->Image2; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="views/images/blogposts/<?php echo $blogpost->Image3; ?>">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="jumbotron">
<p><?php echo $blogpost->ContentP1; ?></p>
<!--echo $img;
}
else
{
echo "<img src='views/images/standard/noimage.jpg' width='auto' />";
}
?>-->
</div>
</center>