<?php
  class blogpost {

    // we define 3 attributes
      public $BlogPostID;
    public $Title;
    public $WriterID;
    public $DatePublished;
    public $Content;
  //  public $country;
    //public $keyword;
    //public $continent;
  //  public $comment;

    public function __construct($BlogPostID, $Title, $WriterID, $DatePublished, $Content){
            //$country, $keyword, $continent, $comment) {
     
      $this->BlogPostID = $BlogPostID;
        $this->Title = $Title;
    $this->WriterID = $WriterID;
    $this->DatePublished = $DatePublished;
    $this->Content = $Content;
    //$this->country = $country;
    //$this->keyword = $keyword;
   // $this->continent= $continent;
    //$this->comment=$comment;
    }

public static function all() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query('SELECT * FROM blogpost');
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'], $blogpost['DatePublished'], $blogpost['WriterID'], $blogpost['Content']);
}
   return $list;
 }

    public static function find() {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $BlogPostID = intval($BlogPostID);
      $req = $db->prepare('SELECT * FROM blogpost WHERE BlogPostID = :BlogPostID');

      //the query was prepared, now replace :id with the actual $id value
      $req->execute;
              (array('BlogPostID' => $BlogPostID));
      $blogpost = $req->fetch();
if($blogpost){
      return new blogpost($blogpost['Title'], $blogpost['DatePublished'], $blogpost['Content']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($BlogPostID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update product set Title=:Title, DatePublished=:DatePublished where BlogPostID=:BlogPostID");
    $req->bindParam(':BlogPostID', $BlogPostID);
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);

// set name and price parameters and execute
    if(isset($_POST['Title'])&& $_POST['Title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'Title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['DatePublished'])&& $_POST['DatePublished']!=""){
        $filteredDatePublished = filter_input(INPUT_POST,'DatePublished', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['Title'])) {
		blogpost::uploadFile($Title);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blogpost(Title, DatePublished) values (:Title, :DatePublished)");
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);

// set parameters and execute
    if(isset($_POST['Title'])&& $_POST['Title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'Title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['DatePublished'])&& $_POST['DatePublished']!=""){
        $filteredDatePublished = filter_input(INPUT_POST,'DatePublished', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$req->execute();

//upload product image
blogpost::uploadFile($Title);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $Title) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/FinalProjectBlog/MVC-Skeleton-master/views/images/";
	$destinationFile = $path . $Title . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
public static function remove($BlogPostID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $BlogPostID = intval($BlogPostID);
      $req = $db->prepare('delete FROM product WHERE BlogPostID = :BlogPostID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $BlogPostID));
  }
  
}
?>