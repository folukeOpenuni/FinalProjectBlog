<p>Fill in the following form to create a post:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Item</h2>
    
    <p>
        <input class="w3-input" type="text" name="Title" >
        <label>Title</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="DatePublished" Placeholder= "YYYY-MM-DD" >
        <label>Date Published</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="WriterID"  >
        <label>Writer</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="Content" >
        <label>Content</label>
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Create blogpost">
    </p>
</form>