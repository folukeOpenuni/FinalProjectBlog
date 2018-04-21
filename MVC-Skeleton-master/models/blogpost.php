<?php
  class blogpost {

    // we define 3 attributes
    public $BlogPostID;
    public $Title;
    public $DatePublished;
    public $WriterID;
    public $Content;
    public $Image;
    public $KeywordID;
    public $CountryID;
    public $ContinentID;
    public $WriterFName;
    public $WriterLName;



    public function __construct($BlogPostID, $Title,  $DatePublished,$WriterID, $Content,$Image,$KeywordID, $CountryID, $ContinentID, $WriterFName, $WriterLName){

            //$country, $keyword, $continent, $comment) {
     
    $this->BlogPostID = $BlogPostID;
    $this->Title = $Title;
    $this->DatePublished = $DatePublished;
    $this->WriterID = $WriterID;
    $this->Content = $Content;
    $this->Image = $Image;
    $this->KeywordID = $KeywordID;
    $this->CountryID = $CountryID;
    $this->ContinentID = $ContinentID;
    $this->WriterFName = $WriterFName;
    $this->WriterLName = $WriterLName;

    }

public static function all() {

  $list = [];
 $db = Db::getInstance();
$req = $db->query('Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID');
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }

     public static function read($BlogPostID) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $BlogPostID = intval($BlogPostID);
        $req = $db->prepare('Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
WHERE blogpost.BlogPostID = :BlogPostID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $BlogPostID));
      $blogpost = $req->fetch();
if($blogpost){
      return new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }


    public static function find() {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      if(isset($_POST['name'])){
       
        if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
            $name=$_POST['name'];
        }
      }
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where blogpost.Title like '%".$name."%' OR country.Country like '%".$name."%'OR continent.Continent like '%".$name."%'");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
    
   

public static function update($BlogPostID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set Title=:Title, DatePublished=:DatePublished, WriterID=:WriterID, Content=:Content where BlogPostID=:BlogPostID;
    Update blogpostkeyword set KeywordID=:KeywordID where BlogPostID=:BlogPostID;Update blogpostcountry set CountryID=:CountryID where BlogPostID=:BlogPostID");
    $req->bindParam(':BlogPostID', $BlogPostID);
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);
    $req->bindParam(':WriterID', $WriterID);
    $req->bindParam(':Content', $Content);
    $req->bindParam(':KeywordID', $KeywordID);
    $req->bindParam(':CountryID', $CountryID);
    
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
    if(isset($_POST['KeywordID'])&& $_POST['KeywordID']!=""){
        $filteredKeywordID = filter_input(INPUT_POST,'KeywordID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['CountryID'])&& $_POST['CountryID']!=""){
        $filteredCountryID = filter_input(INPUT_POST,'CountryID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$BlogPostID = $filteredBlogPostID;
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$WriterID=$filteredWriterID;
$Content = $filteredContent;
$KeywordID = $filteredKeywordID;
$CountryID = $filteredCountryID;
$req->execute();


//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['Title'])) {
		blogpost::uploadFile($Title);
	}

    
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

//Insert Keyword

    /*$db = Db::getInstance();
     $req2 = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where blogpost.Title ='$filteredTitle'");
     $req2->fetchAll() as $blogpost; 
   
 }
    public function addkeywordcountry($list){
 
    $db = Db::getInstance();
     $req = $db->prepare('Insert into blogpostkeyword(BlogPostID, KeywordID) values ('.$blogpost->BlogPostID.', :KeywordID); Insert into blogpostcountry('.$blogpost->BlogPostID.', CountryID) values (:BlogPostID, :CountryID)');
    $req->bindParam(':KeywordID', $KeywordID);
    $req->bindParam(':CountryID', $CountryID);


// set parameters and execute
    if(isset($_POST['KeywordID'])&& $_POST['KeywordID']!=""){
        $filteredKeywordID = filter_input(INPUT_POST,'KeywordID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['CountryID'])&& $_POST['CountryID']!=""){
        $filteredCountryID = filter_input(INPUT_POST,'CountryID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
$KeywordID = $filteredKeywordID;
$CountryID = $filteredCountryID;
$req->execute();*/

//upload product image
/*blogpost::uploadFile($Title);
   }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $DatePublished) {

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
        $path = dirname(__DIR__) . "/views/images/";
	$destinationFile = $path . $DatePublished. '.jpeg';
        $destinationFile = $path . $_FILES[self::InputKey][$DatePublished];
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
      $req = $db->prepare('delete FROM blogpostkeyword WHERE BlogPostID = :BlogPostID; delete FROM blogpostcountry WHERE BlogPostID = :BlogPostID; delete FROM BlogPost WHERE BlogPostID = :BlogPostID');
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
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Africa'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

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
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Asia'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
 public static function antarctica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Antarctica'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
  public static function australia() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Australia'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
  public static function europe() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'Europe'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
  public static function northamerica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'North America'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
  public static function southamerica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.Content, blogpost.Image, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where Continent = 'South America'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
}
?>