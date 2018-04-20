<?php
  class User {

    // all attribues are from personaldata table and reader 
    public $PersonalDataID;
    public $FirstName;
    public $LastName;
    public $Email;
    public $DOB;
    public $Password;
    public $CountryID;
  



    public function __construct($PersonalDataID, $FirstName,  $LastName, $Email, $DOB, $CountryID, $Password, $Image){

            //$country, $keyword, $continent, $comment) {
     
    $this->PersonalDataID = $PersonalDataID;
    $this->FirstName = $FirstName;
    $this->LastName = $LastName;
    $this->CountryID = $CountryID;
    $this->Email = $Email;
    $this->DOB = $DOB;
 //   $this->Country = $Country;
    $this->Password = $Password;
    $this->CountryID = $CountryID;
    }
  
     
      // username and password sent from form 
//        if($_SERVER["REQUEST_METHOD"] == "POST") {
//      $Email = mysqli_real_escape_string($db,$_POST['Email']);
//      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
//      
//      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
//      $result = mysqli_query($db,$sql);
//      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
//      
//      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
//		
//      if($count == 1) {
//         session_register("myusername");
//         $_SESSION['login_user'] = $myusername;
//         
//         header("location: welcome.php");
//      }else {
//         $error = "Your Login Name or Password is invalid";
//      }
//   }
//   
//find function from blogpost
//        public static function find() {
//      $db = Db::getInstance();
//      //use intval to make sure $id is an integer
//      if(isset($_POST['name'])){
//       
//        if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
//            $name=$_POST['name'];
//        }
//      }
//      $req = $db->query("Select blogpost.BlogPostID, blogpost.Title, blogpost.Image, blogpost.DatePublished, blogpost.WriterID, blogpost.Content, country.Country, continent.Continent
//From blogpost
//Inner join blogpostcountry on blogpostcountry.BlogPostID = blogpost.BlogPostID
//Inner Join country ON blogpostcountry.CountryID = country.CountryID
//Inner Join continent on country.ContinentID = continent.ContinentID where Title like '%".$name."%' OR Country like '%".$name."%'OR Continent like '%".$name."%'");
//     foreach($req->fetchAll() as $blogpost) {
// $list[] = new blogpost($blogpost['BlogPostID'],$blogpost['Title'], $blogpost['Image'], $blogpost['DatePublished'], $blogpost['WriterID'], $blogpost['Content'], $blogpost['Country'], $blogpost['Continent']);
//
//}
//   return $list;
// }
    //end of find function from blogpost class
 
    
        public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into personaldata(FirstName, LastName, Email, DOB, Password, CountryID) values (:FirstName, :LastName, :Email, :DOB, :Password, :CountryID)");

    $req->bindParam(':FirstName', $FirstName);
    $req->bindParam(':LastName', $LastName);
    $req->bindParam(':Email', $Email);
    $req->bindParam(':DOB', $DOB);
    $req->bindParam(':Password', $Password);
   $req->bindParam(':CountryID', $CountryID);
   
    

// set parameters and execute
   
    if(isset($_POST['FirstName'])&& $_POST['FirstName']!=""){
        $filteredFirstName = filter_input(INPUT_POST,'FirstName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['LastName'])&& $_POST['LastName']!=""){
        $filteredLastName = filter_input(INPUT_POST,'LastName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['Email'])&& $_POST['Email']!=""){
        $filteredEmail = filter_input(INPUT_POST,'Email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['DOB'])&& $_POST['DOB']!=""){
        $filteredDOB = filter_input(INPUT_POST,'DOB', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['Password'])&& $_POST['Password']!=""){
        $filteredPassword = filter_input(INPUT_POST,'Password', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
       if(isset($_POST['CountryID'])&& $_POST['CountryID']!=""){
     $filteredCountryID = filter_input(INPUT_POST,'CountryID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
$FirstName = $filteredFirstName;
$LastName = $filteredLastName;
$Email = $filteredEmail;
$DOB = $filteredDOB;
$Password = $filteredPassword;
$CountryID = $filteredCountryID;

 $req->execute();
        }
  }
  