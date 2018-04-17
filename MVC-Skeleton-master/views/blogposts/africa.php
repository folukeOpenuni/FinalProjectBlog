<!--STATIC HEADER IMAGE-->
<section>
        <div class="text-white text-overlay">

            <img class="img-fluid" src="views/images/continent/africa.jpg"  alt="africa">
            <h1 class="text-centered">Africa</h1>
            <p class="text-subhead">It's gonna take a lot to drag me away from you
</p>
        </div>
</section>


<section class='container-fluid'>
    <div class='row'>
<?php foreach($blogposts as $blogpost) { ?>
<!--BLOG POST LISTINGS
        <div class="col-md-4 container">
            <a href='?controller=blogpost&action=africa&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'></a>
            <img class="image" src="views/images/<?php echo $blogpost->Image;?>" class="img-thumbnail img-responsive rounded" width="100%">
        <div class="middle">-->
      
    <?php echo $blogpost->Title; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Update blogpost</a> &nbsp;
    </p>
        </div>
<?php } ?>
    </div>
</section>
