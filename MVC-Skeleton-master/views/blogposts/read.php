

<div class="text-white text-overlay blog-img">
  <img class="img-fulid blog-img" src="views/images/<?php echo $blogpost->Image; ?>">
    <h1 class="text-centered"><?php echo $blogpost->Title; ?></h1>
    <p class="text-subhead">Date Published: <?php echo $blogpost->DatePublished; ?></p>
</div>

<p>This is the requested product:</p>

<p>Product BlogPostID: <?php echo $blogpost->BlogPostID; ?></p>
<p>Product Content: <?php echo $blogpost->Content; ?></p>

<!--DO WE NEED THE BELOW? OR CAN WE MAKE A PHOTO MANDATORY WHEN UPLOADING A BLOG-->
<?php 
$file = 'views/images/' . $blogpost->Image;
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
<!--COMMENT SECTION->
--><section class='container-fluid'>
    <H3>Comments</H3>
    <a href='?controller=comment&action=comment&UserCommentID=<?php echo $comment->UserCommentID; ?>'>Comment</a> &nbsp;
    <a href='?controller=comment&action=delete&UserCommentID=<?php echo $comment->UserCommentID; ?>'>Delete</a> &nbsp;
    <a href='?controller=comment&action=edit&UserCommentID=<?php echo $comment->UserCommentID; ?>'>Edit</a> &nbsp;
<!--INITIAL COMMENT-->
    <div class="media bg-2">
        <img class="mr-3" src="views/images/profilepicture/individual.jpeg" width=50px height=50px>
            <div class="media-body">
            <h5 class="mt-0"><?php echo $comment->ReaderID;?></h5>
            <p><?php echo $comment->CommentContent;?></p>
            
<!--REPLY COMMENT IS NESTED-->
    <div class="media mt-3 bg-2">
        <a class="pr-3" href="#">
        <img src="views/images/profilepicture/individual.jpeg" width=50px height=50px>
        </a>
            <div class="media-body">
            <h5 class="mt-0">TonyConstantopolis_98</h5>
            <p>You should go to the mountains in the Spring, its so inspiring.</p>
            </div>
    </div>
            </div> <!--THIS ACHIEVES NESTING-->
    </div>
</section>