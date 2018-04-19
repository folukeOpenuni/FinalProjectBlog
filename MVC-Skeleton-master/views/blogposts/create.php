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
        <input class="w3-input" type="text" name="Content" >
        <label>Content</label>
    </p>
            
  <!--<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>-->
    <input class="w3-btn w3-gray" type="submit" value="Create blogpost">
    </p>
</form>