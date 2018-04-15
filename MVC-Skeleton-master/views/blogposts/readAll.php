<!--STATIC HEADER IMAGE-->
<section class="container-fluid">
    <div class="card text-white">
        <img class="card-img" src="views/images/road.jpg" alt="road">
        <div class="card-img-overlay">
        <h1 class="card-title text-centered">Blog posts</h1>
        <p class="text-subhead">Explore the world</p>
    </div>
    </div>
</section>

<?php foreach($blogpost as $blogpost) { ?>
<!--BLOG POST LISTINGS-->
<section container-fluid>
    <div class="col-md-4 container">
        <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'><img class="image" src="views/images/"<?php echo $blogpost->Image;?> class="img-thumbnail img-responsive rounded" width="100%">
        <div class="middle">
        <div class="text"><?php echo $blogpost->Title;?></div>
        </div></a>
    </div>
</section>

  <p>
    <?php echo $blogpost->Title; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Update blogpost</a> &nbsp;
  </p>
<?php } ?>