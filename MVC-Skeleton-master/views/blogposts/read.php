
<div class="card text-white">
  <img class="card-img" src="views/images/"<?php echo $blogpost->Image; ?>>
  <div class="card-img-overlay">
    <h1 class="card-title text-centered"><?php echo $blogpost->Title; ?></h1>
    <p class="text-subhead">Date Published: <?php echo $blogpost->DatePublished; ?></p>
  </div>
</div>

<p>This is the requested product:</p>

<p>Product BlogPostID: <?php echo $blogpost->BlogPostID; ?></p>
<p>Product Content: <?php echo $blogpost->Content; ?></p>

<!--DO WE NEED THE BELOW? OR CAN WE MAKE A PHOTO MANDATORY WHEN UPLOADING A BLOG-->
<?php 
$file = 'views/images/' . $blogpost->Title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
