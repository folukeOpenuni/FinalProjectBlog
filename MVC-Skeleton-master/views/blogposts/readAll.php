<section>
        <div class="text-white text-overlay">
            <img class="img-fluid" src="views/images/road.jpg" alt="road">
            <h1 class="text-centered">Blog posts</h1>
            <p class="text-subhead">Explore the world</p>
        </div>
</section>

<section class='container-fluid'>
    <div class='row'>
<?php foreach($blogposts as $blogpost) { ?>
<!--BLOG POST LISTINGS-->
        <div class="col-md-4 col-sm-10 col-10 container">
        <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'><img class="image" src="views/images/<?php echo $blogpost->HeaderImage;?>" class="img-thumbnail img-responsive" width="100%">
        <div class="middle">
        <div class="text"><?php echo $blogpost->Title;?></div>
        </div></a>
    <p class='text-center'>
    <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>View</a> &nbsp;
    <a href='?controller=blogpost&action=delete&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Delete</a> &nbsp;
    <a href='?controller=blogpost&action=update&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Update</a> &nbsp;
    </p>
        </div>
<?php } ?>
    </div>
</section>
