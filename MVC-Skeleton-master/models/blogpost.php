<?php
  class blogpost {

    // we define 3 attributes
    public $BlogPostID;
    public $Title;
    public $DatePublished;
    public $WriterFName;
    public $WriterLName;
    public $Content;
    public $Image;
    //public $Keyword;
    public $Country;
    public $Continent;



    public function __construct($BlogPostID, $Title,  $DatePublished,$WriterFName, $WriterLName, $Content,$Image, $Country, $Continent){

            //$country, $keyword, $continent, $comment) {
     
    $this->BlogPostID = $BlogPostID;
    $this->Title = $Title;
    $this->DatePublished = $DatePublished;
    $this->WriterFName = $WriterFName;
    $this->WriterLName = $WriterLName;
    $this->Content = $Content;
    $this->Image = $Image;
    //$this->Keyword = $Keyword;
    $this->Country = $Country;
    $this->Continent = $Continent;

    //$this->country = $country;
    //$this->keyword = $keyword;
   // $this->continent= $continent;
    //$this->comment=$comment;
    }

public static function all() {
    //switch ($action){
    //case 'delete':
       // $action='readall'();
        //break;
    //}
  $list = [];
 $db = Db::getInstance();
$req = $db->query('Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, blogpost.Image,country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID');
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }

<<<<<<< HEAD
    public static function find() {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      if(isset($_POST['name'])){
       
        if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
            $name=$_POST['name'];
        }
      }
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, blogpost.WriterID, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID where Title like '%".$name."%' OR Country like '%".$name."%'OR Continent like '%".$name."%'");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'], $blogpost['Image'], $blogpost['DatePublished'], $blogpost['WriterID'], $blogpost['Content'], $blogpost['Country'], $blogpost['Continent']);
=======
    public static function find($BlogPostID) {
       
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $BlogPostID = intval($BlogPostID);
      $req = $db->prepare('Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, blogpost.Image,country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID WHERE blogpost.BlogPostID = :BlogPostID');

      //the query was prepared, now replace :id with the actual $id value
      $req->execute (array('BlogPostID' => $BlogPostID));
      $blogpost = $req->fetch();
if($blogpost){
      return new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);
>>>>>>> ae8c48514e60a2705bd02c2c02c826b8d0761a7d

}
   return $list;
 
    }

public static function update($BlogPostID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set Title=:Title, DatePublished=:DatePublished, WriterID=:WriterID, Content=:Content where BlogPostID=:BlogPostID");
    $req->bindParam(':BlogPostID', $BlogPostID);
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);
    $req->bindParam(':WriterID', $WriterID);
    $req->bindParam(':Content', $Content);
    
// set name and price parameters and execute
    //if(isset($_POST['BlogPostID'])&& $_POST['BlogPostID']!=""){
       //$filteredBlogPostID = filter_input(INPUT_POST,'BlogPostID', FILTER_SANITIZE_SPECIAL_CHARS);
  // }
    if(isset($_POST['Title'])&& $_POST['Title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'Title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['DatePublished'])&& $_POST['DatePublished']!=""){
        $filteredDatePublished = filter_input(INPUT_POST,'DatePublished', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['WriterID'])&& $_POST['WriterID']!=""){
        $filteredWriterID = filter_input(INPUT_POST,'WriterID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['Content'])&& $_POST['Content']!=""){
        $filteredContent = filter_input(INPUT_POST,'Content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$BlogPostID = $filteredBlogPostID;
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$WriterID=$filteredWriterID;
$Content = $filteredContent;
$req->execute();

//upload product image if it exists
        /*if (!empty($_FILES[self::InputKey]['Title'])) {
		blogpost::uploadFile($Title);
	}*/

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blogpost(Title, DatePublished, WriterID, Content) values (:Title, :DatePublished, :WriterID, :Content)");
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);
    $req->bindParam(':WriterID', $WriterID);
    $req->bindParam(':Content', $Content);

// set parameters and execute
    if(isset($_POST['Title'])&& $_POST['Title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'Title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['DatePublished'])&& $_POST['DatePublished']!=""){
        $filteredDatePublished = filter_input(INPUT_POST,'DatePublished', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['WriterID'])&& $_POST['WriterID']!=""){
        $filteredWriterID = filter_input(INPUT_POST,'WriterID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['Content'])&& $_POST['Content']!=""){
        $filteredContent = filter_input(INPUT_POST,'Content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$WriterID = $filteredWriterID;
$Content = $filteredContent;
$req->execute();

//upload product image
//blogpost::uploadFile($Title);
   // }

//const AllowedTypes = ['image/jpeg', 'image/jpg'];
//const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
/*public static function uploadFile(string $Title) {

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
        $path = "/views/images/";
	$destinationFile = $path . $Title . '.jpeg';
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}*/
}
public static function remove($BlogPostID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $BlogPostID = intval($BlogPostID);
      $req = $db->prepare('delete FROM BlogPost WHERE BlogPostID = :BlogPostID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $BlogPostID));
  }
  public static function africa() {
    //switch ($action){
    //case 'delete':
       // $action='readall'();
        //break;
    //}
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Africa'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
 
 public static function asia() {
    //switch ($action){
    //case 'delete':
       // $action='readall'();
        //break;
    //}
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Asia'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
 public static function antarctica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Antarctica'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
  public static function australia() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Australia'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
  public static function europe() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Europe'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
  public static function northamerica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'North America'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
  public static function southamerica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, personaldata.FirstName, personaldata.LastName, blogpost.Content, country.Country, continent.Continent
From blogpost
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'South America'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['Image'],$blogpost['DatePublished'], $blogpost['FirstName'],$blogpost['LastName'],$blogpost['Content'], $blogpost['Image'],$blogpost['Country'],$blogpost['Continent']);

}
   return $list;
 }
}
?>