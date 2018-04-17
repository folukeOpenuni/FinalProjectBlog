<?php
  class user {

    // we define 3 attributes
    public $Name;
    public $Country;
    public $ProfilePic;
    public $DOB;
    public $Email;
    public $Password;
 
   


    public function __construct($Name, $Country, $ProfilePic, $DOB, $Email, $Password){

            //$country, $keyword, $continent, $comment) {
     
    $this->Name= $Name;
    $this->Country = $Country;
    $this->ProfilePic = $ProfilePic;
    $this->DOB = $DOB;
    $this->Email = $Email;
    $this->Password = $Password;
 
    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into personaldata(FirstName, LastName, Email, DOB, Password) values (:FirstName, :LastName, :Email, :DOB, :Password)");
    $req->bindParam(':FirstName', $FirstName);
    $req->bindParam(':LastName', $LastName);
    $req->bindParam(':Email', $Email);
    $req->bindParam(':DOB', $DOB);
    $req->bindParam(':Password', $Password);

// set parameters and execute
    if(isset($_POST['FirstName'])&& $_POST['FirstName']!=""){
        $filteredFirstName= filter_input(INPUT_POST,'FirstName', FILTER_SANITIZE_SPECIAL_CHARS);
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
$FirstName = $filteredFirstName;
$LastName = $filteredLastName;
$Email = $filteredEmail;
$DOB = $filteredDOB;
$req->execute();


	
		
	