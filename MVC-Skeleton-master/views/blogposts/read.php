<p>This is the requested product:</p>

<p>Product ID: <?php echo $blogpost->id; ?></p>
<p>Product Name: <?php echo $blogpost->name; ?></p>
<p>Product Price: £<?php echo $blogpost->price; ?></p>
<?php 
$file = 'views/images/' . $blogpost->name . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
