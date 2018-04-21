<style>
    .avatar {
    vertical-align: middle;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
    
</style>

<div class="text-white text-overlay blog-img">
  <img class="img-fulid blog-img" src="views/images/<?php echo $blogpost->HeaderImage; ?>">
    <h1 class="text-centered"><?php echo $blogpost->Title; ?></h1>
    <p class="text-subhead">Date Published: <?php echo $blogpost->DatePublished; ?></p>
</div>
<br>
<br>
<center>

    <img src="views/images/profilepicture/<?php echo $blogpost->WriterFName;?>.jpeg" alt="Avatar" class="avatar">
    <br>
    <br>
    <p>Written by <?php echo $blogpost->WriterFName;
    
?></p>


<!--<p>Product BlogPostID: <?php //echo $blogpost->BlogPostID; ?></p>-->
<div class="jumbotron">
<p><?php echo $blogpost->ContentP1; ?></p>
</div>
    
    <!--PLACEHOLDER FOR CAROSELL-->
   <div class="jumbotron">
<p><?php echo $blogpost->ContentP2; ?></p>
</div> 


</center>	
