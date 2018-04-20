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
  