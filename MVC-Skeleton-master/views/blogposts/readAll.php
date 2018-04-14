<p>Here is a list of all blogposts:</p>

<?php foreach($blogposts as $blogpost) { ?>
  <p>
    <?php echo $blogpost->Title; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&BlogPostID=<?php echo $blogpost->BlogPostID; ?>'>Update blogpost</a> &nbsp;
  </p>
<?php } ?>