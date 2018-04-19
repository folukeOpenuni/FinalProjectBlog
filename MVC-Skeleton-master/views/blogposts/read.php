<style>
    .avatar {
    vertical-align: middle;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
    
</style>

<div class="text-white text-overlay blog-img">
  <img class="img-fulid blog-img" src="views/images/<?php echo $blogpost->Image; ?>">
    <h1 class="text-centered"><?php echo $blogpost->Title; ?></h1>
    <p class="text-subhead">Date Published: <?php echo $blogpost->DatePublished; ?></p>
</div>
<br>
<br>
<center>
    <img src="views/images/profilepicture/<?php echo $blogpost->WriterID;?>.jpg" alt="Avatar" class="avatar">
    <br>
    <br>
    <p>Written by <?php 
    if ($blogpost->WriterID == 1){
        echo "John Murray";
    } elseif ($blogpost->WriterID == 2) {
        echo "Andrea Orset";
    }elseif ($blogpost->WriterID == 3){
        echo "Penny Yiota";
    } else{
        echo "Keira Kenny";
    }
    
?></p>

<!--<p>Product BlogPostID: <?php //echo $blogpost->BlogPostID; ?></p>-->
<div class="jumbotron">
<p><?php echo $blogpost->Content; ?></p>
</div>

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
</center>	
