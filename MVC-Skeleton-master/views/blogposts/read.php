<p>This is the requested product:</p>

<p>Product BlogPostID: <?php echo $blogpost->BlogPostID; ?></p>
<p>Product Title: <?php echo $blogpost->Title; ?></p>
<p>Product Date Published: <?php echo $blogpost->DatePublished; ?></p>
<p>Product Content: <?php echo $blogpost->Content; ?></p>

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
	
