<p>Fill in the following form to update an existing product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Item</h2>
    
    <p>
        <input class="w3-input" type="text" name="Title" value="<?= $blogpost->Title; ?>">
        <label>Title</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="DatePublished" Placeholder= "YYYY-MM-DD" value="<?= $blogpost->DatePublished; ?>">
        <label>Date Published</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="WriterID" value="<?= $blogpost->WriterID; ?>" >
       <div class="form-group col-md-12">
  <label for="WriterID">Writer</label>
  <select class="form-control" id="WriterID" name="WriterID">
    <option value="1">John Murray</option>
    <option value="2">Andrea Orset</option>
    <option value="3">Penny Yiota</option>
    <option value="4">Kiera Kenney</option>
  </select>
        </div>
    </p>
    <p>
        <input class="w3-input" type="text" name="Content" value="<?= $blogpost->Content; ?>">
        <label>Content</label>
    </p>
            
 <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
/*$file = 'views/images/' . $blogpost->Title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}*/

?>
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
      <button onclick="document.getElementById('id01').style.display='block'" class='w3-btn w3-gray' type='submit' value='Update blogpost'>Update</button>
  </p>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>Your post has been updated!</p>
      </div>
    </div>
  </div>
    
</form>