<?php
  class blogpost {

    // we define 3 attributes
    public $BlogPostID;
    public $Title;
    public $DatePublished;
    public $WriterID;
    public $ContentP1;
    public $ContentP2;
    public $Image;
    public $Image1;
    public $Image2;
    public $Image3;
    public $KeywordID;
    public $CountryID;
    public $ContinentID;
    public $WriterFName;
    public $WriterLName;



    public function __construct($BlogPostID, $Title,  $DatePublished,$WriterID, $ContentP1,$ContentP2,$Image, $Image1,$Image2,$Image3,$KeywordID, $CountryID, $ContinentID, $WriterFName, $WriterLName){

            //$country, $keyword, $continent, $comment) {
     
    $this->BlogPostID = $BlogPostID;
    $this->Title = $Title;
    $this->DatePublished = $DatePublished;
    $this->WriterID = $WriterID;
    $this->ContentP1 = $ContentP1;
     $this->ContentP2 = $ContentP2;
    $this->Image = $Image;
    $this->Image1 = $Image1;
    $this->Image2 = $Image2;
    $this->Image3 = $Image3;
    $this->KeywordID = $KeywordID;
    $this->CountryID = $CountryID;
    $this->ContinentID = $ContinentID;
    $this->WriterFName = $WriterFName;
    $this->WriterLName = $WriterLName;

    }

public static function all() {

  $list = [];
 $db = Db::getInstance();
$req = $db->query('Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
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
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }

     public static function read($BlogPostID) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $BlogPostID = intval($BlogPostID);
        $req = $db->prepare('Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
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
      return new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'], $blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
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
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3, keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where blogpost.Title like '%".$name."%' OR blogpost.DatePublished like '%".$name."%' OR country.Country like '%".$name."%'OR continent.Continent like '%".$name."%'OR keyword.Keyword like '%".$name."%' OR personaldata.FirstName like '%".$name."%' OR personaldata.LastName like '%".$name."%'");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
    
   

public static function update($BlogPostID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set Title=:Title, DatePublished=:DatePublished, WriterID=:WriterID, ContentP1=:ContentP1, ContentP2=:ContentP2 where BlogPostID=:BlogPostID;
    Update blogpostkeyword set KeywordID=:KeywordID where BlogPostID=:BlogPostID;Update blogpostcountry set CountryID=:CountryID where BlogPostID=:BlogPostID");
    $req->bindParam(':BlogPostID', $BlogPostID);
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);
    $req->bindParam(':WriterID', $WriterID);
    $req->bindParam(':ContentP1', $ContentP1);
    $req->bindParam(':ContentP2', $ContentP2);
    $req->bindParam(':KeywordID', $KeywordID);
    $req->bindParam(':CountryID', $CountryID);
    
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
    if(isset($_POST['ContentP1'])&& $_POST['ContentP1']!=""){
        $filteredContentP1 = filter_input(INPUT_POST,'ContentP1', FILTER_SANITIZE_SPECIAL_CHARS);
    }
     if(isset($_POST['ContentP2'])&& $_POST['ContentP2']!=""){
        $filteredContentP2 = filter_input(INPUT_POST,'ContentP2', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['KeywordID'])&& $_POST['KeywordID']!=""){
        $filteredKeywordID = filter_input(INPUT_POST,'KeywordID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['CountryID'])&& $_POST['CountryID']!=""){
        $filteredCountryID = filter_input(INPUT_POST,'CountryID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$WriterID=$filteredWriterID;
$ContentP1 = $filteredContentP1;
$ContentP2 = $filteredContentP2;
$KeywordID = $filteredKeywordID;
$CountryID = $filteredCountryID;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['BlogPostID'])) {
		blogpost::uploadFile($BlogPostID);
	}

    
    }
    
        public static function add() {
    $db = Db::getInstance();
    
    $req = $db->prepare("Insert into blogpost(Title, DatePublished, WriterID, ContentP1, ContentP2) values (:Title, :DatePublished, :WriterID, :ContentP1, :ContentP2)");
    $req->bindParam(':Title', $Title);
    $req->bindParam(':DatePublished', $DatePublished);
    $req->bindParam(':WriterID', $WriterID);
    $req->bindParam(':ContentP1', $ContentP1);
    $req->bindParam(':ContentP2', $ContentP2);

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
    if(isset($_POST['ContentP1'])&& $_POST['ContentP1']!=""){
        $filteredContentP1 = filter_input(INPUT_POST,'ContentP1', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['ContentP2'])&& $_POST['ContentP2']!=""){
        $filteredContentP2 = filter_input(INPUT_POST,'ContentP2', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$Title = $filteredTitle;
$DatePublished = $filteredDatePublished;
$WriterID = $filteredWriterID;
$ContentP1 = $filteredContentP1;
$ContentP2 = $filteredContentP2;
$req->execute();
$BlogPostID = blogpost::getBlogPostID($filteredTitle); 
return $BlogPostID;
    }
//Insert Keyword
public function getBlogPostID($filteredTitle){
    $db = Db::getInstance();
     $req = $db->query("Select BlogPostID From blogpost where Title ='$filteredTitle'");
    //$req->execute();
      $blogpost = $req->fetch();
      $BlogPostID =$blogpost["BlogPostID"];
      return $BlogPostID;
/*if($blogpost){
      return new blogpost($blogpost['BlogPostID']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }*/
   
    }
    public function addkeywordcountry($BlogPostID){
 
    $db = Db::getInstance();
     $req = $db->prepare('Insert into blogpostkeyword(BlogPostID, KeywordID) values ('.$BlogPostID.', :KeywordID); Insert into blogpostcountry(BlogPostID, CountryID) values ('.$BlogPostID.', :CountryID)');
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
$req->execute();
$req->closeCursor();

//upload product image
//str_replace("/","-",$DatePublished,$i);
blogpost::uploadFile($BlogPostID);
   }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $BlogPostID) {

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
//str_replace("/","-",$DatePublished,$i);
	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = dirname(__DIR__) . "/views/images/blogposts/";
	$destinationFile = $path . $BlogPostID. '.jpeg';
        //$destinationFile = $path . $_FILES[self::InputKey][$Title];
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
        $db = Db::getInstance();
     $req2 = $db->query("Update blogpost set Image='$BlogPostID.jpeg' where BlogPostID='$BlogPostID'");
     $req2->execute();
     blogpost::uploadFile1($BlogPostID);
   }

const AllowedTypes1 = ['image/jpeg', 'image/jpg'];
const InputKey1 = 'myUploader1';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile1(string $BlogPostID) {

	if (empty($_FILES[self::InputKey1])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey1]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey1]['type'], self::AllowedTypes1)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey1]['type']);
	}
//str_replace("/","-",$DatePublished,$i);
	$tempFile = $_FILES[self::InputKey1]['tmp_name'];
        $path = dirname(__DIR__) . "/views/images/blogposts/";
	$destinationFile = $path . $BlogPostID. '.1.jpeg';
        //$destinationFile = $path . $_FILES[self::InputKey][$Title];
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
        $db = Db::getInstance();
     $req3 = $db->query("Update blogpost set Image1='$BlogPostID.1.jpeg' where BlogPostID='$BlogPostID'");
     $req3->execute();
     
     blogpost::uploadFile2($BlogPostID);
   }

const AllowedTypes2 = ['image/jpeg', 'image/jpg'];
const InputKey2 = 'myUploader2';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile2(string $BlogPostID) {

	if (empty($_FILES[self::InputKey2])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey2]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey2]['type'], self::AllowedTypes2)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey2]['type']);
	}
//str_replace("/","-",$DatePublished,$i);
	$tempFile = $_FILES[self::InputKey2]['tmp_name'];
        $path = dirname(__DIR__) . "/views/images/blogposts/";
	$destinationFile = $path . $BlogPostID. '.2.jpeg';
        //$destinationFile = $path . $_FILES[self::InputKey][$Title];
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
        $db = Db::getInstance();
     $req4 = $db->query("Update blogpost set Image2='$BlogPostID.2.jpeg' where BlogPostID='$BlogPostID'");
     $req4->execute();
     blogpost::uploadFile3($BlogPostID);
   
}
const AllowedTypes3 = ['image/jpeg', 'image/jpg'];
const InputKey3 = 'myUploader3';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile3(string $BlogPostID) {

	if (empty($_FILES[self::InputKey3])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey3]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey3]['type'], self::AllowedTypes3)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey3]['type']);
	}
//str_replace("/","-",$DatePublished,$i);
	$tempFile = $_FILES[self::InputKey3]['tmp_name'];
        $path = dirname(__DIR__) . "/views/images/blogposts/";
	$destinationFile = $path . $BlogPostID. '.3.jpeg';
        //$destinationFile = $path . $_FILES[self::InputKey][$Title];
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
        $db = Db::getInstance();
     $req5 = $db->query("Update blogpost set Image3='$BlogPostID.3.jpeg' where BlogPostID='$BlogPostID'");
     $req5->execute();
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
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'Africa'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

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
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'Asia'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
}
   return $list;
 }
 public static function antarctica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'Antarctica'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
}
   return $list;
 }
  public static function australia() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'Australia'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
}
   return $list;
 }
  public static function europe() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'Europe'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
}
   return $list;
 }
  public static function northamerica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'North America'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
}
   return $list;
 }
  public static function southamerica() {
  $list = [];
 $db = Db::getInstance();
$req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
Where continent.Continent = 'South America'");
// we create a list of Product objects from the database results
foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['ContentP1'],$blogpost['ContentP2'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);
}
   return $list;
 }
 
 public static function Andreas() {
   $list = [];
 $db = Db::getInstance();
      
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where writer.WriterID = 2");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
 public static function John() {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      if(isset($_POST['name'])){
       
        if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
            $name=$_POST['name'];
        }
      }
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where writer.WriterID = '$name'");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
 public static function Penny() {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      if(isset($_POST['name'])){
       
        if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
            $name=$_POST['name'];
        }
      }
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where writer.WriterID = 3");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
 public static function Kiera() {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      if(isset($_POST['name'])){
       
        if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
            $name=$_POST['name'];
        }
      }
      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title,  blogpost.DatePublished, blogpost.WriterID, blogpost.ContentP1, blogpost.ContentP2, blogpost.Image, blogpost.Image1, blogpost.Image2,blogpost.Image3,keyword.Keyword, country.Country, continent.Continent, personaldata.FirstName, personaldata.LastName
From blogpost
inner join blogpostkeyword on blogpostkeyword.BlogPostID = blogpost.BlogPostID
inner join keyword on blogpostkeyword.KeywordID = keyword.KeywordID
Inner join writer on writer.WriterID= blogpost.WriterID
Inner join personaldata on writer.PersonalDataID = personaldata.PersonalDataID
Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
Inner Join country ON blogpostcountry.CountryID = country.CountryID
Inner Join continent on country.ContinentID = continent.ContinentID
where writer.WriterID = 4");
     foreach($req->fetchAll() as $blogpost) {
 $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'],$blogpost['DatePublished'],$blogpost['WriterID'],$blogpost['Content'], $blogpost['Image'],$blogpost['Image1'],$blogpost['Image2'],$blogpost['Image3'],$blogpost['Keyword'],$blogpost['Country'],$blogpost['Continent'], $blogpost['FirstName'],$blogpost['LastName']);

}
   return $list;
 }
}
?>