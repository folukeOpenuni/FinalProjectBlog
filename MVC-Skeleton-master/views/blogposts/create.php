<p>Fill in the following form to create a new post:</p>
<form action="blogpost_controller.php" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add Blog Post</h2>
</div>
    <p>
        <input class="w3-input" type="text" name="Title" required autofocus>
        <label>Title</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="DatePublished" placeholder="YYYY-MM-DD" required>
        <label>Date Published</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="WriterID" required >
        <label>Writer</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="Content" required>
        <label>Content</label>
    </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add BlogPost">
  </p>
</form>