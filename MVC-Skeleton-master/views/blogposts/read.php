
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
	
