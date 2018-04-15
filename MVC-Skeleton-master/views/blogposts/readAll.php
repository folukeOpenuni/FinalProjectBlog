<!--STATIC HEADER IMAGE-->
<section>
    <div class="text-white bottom-pad text-overlay">
        <img class="img-fluid" src="views/images/road.jpg" alt="road">
        <h1 class="text-centered">Blog posts</h1>
        <p class="text-subhead">Explore the world</p>
    </div>
</section>

<?php foreach($blogpost as $blogpost) { ?>
<!--BLOG POST LISTINGS-->
<section container-fluid>
    <div class="col-md-4 container">
        <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'><img class="image" src="views/images/<?php echo $blogpost->Image;?>" class="img-thumbnail img-responsive rounded" width="100%">
        <div class="middle">
        <div class="text"><?php echo $blogpost->Title;?></div>
        </div></a>
    <p>
    <a href='?controller=blogpost&action=delete&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Update blogpost</a> &nbsp;
    </p>
</section>

<?php } ?>