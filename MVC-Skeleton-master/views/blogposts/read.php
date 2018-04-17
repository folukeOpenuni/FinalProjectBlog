<!--BLOG CONTENT-->
<section id='content'>
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
</section>

<!--COMMENT SECTION-->
<section id='comments' class='container-fluid'>
    <H3>Comments</H3>
<!-- COMMENT FORM (to post values to the comment.php page to be used in methods?-->
    <div id='respond'>
    <p>Leave a comment below</p>
    <form method="post" action="controllers/comment_controller.php" id="commentform" required="required">
        <input type="hidden" name="UserCommentID" value=""/>
        <input type="textarea" name="CommentContent" id='CommentContent'/>
        <input type="hidden" name="ReaderID" value="5"/>
        <input type="hidden" name="BlogPostID" value="/index.php?controller=blogpost&action=read&BlogPostID=<?php $_GET['BlogPostID']?>"/>
        <input type="hidden" name="CommentTimestamp" value=""/>
        <input name="submit "type ="Submit"/>    
    </form>    
    </div>
<!--BELOW IS ACHIEVING NOTHING-->
    <a href='?controller=comment&action=comment&UserCommentID=<?php echo $comment->UserCommentID; ?>'>Comment</a> &nbsp;
    <a href='?controller=comment&action=delete&UserCommentID=<?php echo $comment->UserCommentID; ?>'>Delete</a> &nbsp;
    <a href='?controller=comment&action=edit&UserCommentID=<?php echo $comment->UserCommentID; ?>'>Edit</a> &nbsp;

    <!--INITIAL COMMENT-->
    <div class="media bg-2">
        <img class="mr-3" src="views/images/profilepicture/individual.jpeg" width=50px height=50px>
            <div class="media-body">
            <h5 class="mt-0"><?php echo $comment->FirstName;?>,<?php echo $comment->LastName?></h5>
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

<!--<script>
function loanItem(itemID){
    //Called from the onclick on borrow. Get's the itemID from the code earlier and passes it to loanItem.php to do its borrow stuff.
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()   {
        if (this.readyState === 4 && this.status === 200) { 
            //Updates the copies available to the message returned from the loanitem.php page.
            document.getElementById("copiesAvailable").innerHTML = this.responseText;
        }
    };
    //Calls a GET request to send ths query string to the php page
    xhttp.open("GET", "loanItem.php?itemID="+itemID, true);
    xhttp.send();
    getScoreInfo();
}

</script>-->