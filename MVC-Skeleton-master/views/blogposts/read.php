<!--<p>This is the requested product:</p>-->

<!--<p>BlogPostID: <?php //echo $blogpost->BlogPostID; ?></p>-->
<p>Title: <?php echo $blogpost->Title; ?></p>
<p>WriterID: <?php echo $blogpost->WriterID; ?></p>
<p>Date Published: <?php echo $blogpost->DatePublished; ?></p>
<p>Content: <?php echo $blogpost->Content; ?></p>

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
	
