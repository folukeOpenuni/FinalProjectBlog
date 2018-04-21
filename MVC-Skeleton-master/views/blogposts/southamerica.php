<?php session_start();?>

<!--STATIC HEADER IMAGE-->
<section>
        <div class="text-white text-overlay">

            <img class="img-fluid" src="views/images/continent/southamerica.jpg"  alt="southamerica">
            <h1 class="text-centered">South America</h1>
            <p class="text-subhead">Whenever, wherever<br>
We're meant to be together
</p>
        </div>
</section>


<section class='container-fluid'>
    <div class='row'>
<?php foreach($blogposts as $blogpost) { ?>
<!--BLOG POST LISTINGS-->
        <div class="col-md-4 container">
            <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>
            <img class="image" src="views/images/<?php echo $blogpost->Image;?>" class="img-thumbnail img-responsive rounded" width="100%">
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
