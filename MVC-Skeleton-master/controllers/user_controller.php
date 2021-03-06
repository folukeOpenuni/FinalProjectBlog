<?php

Class userController {
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/user/create.php');
      }
      else { 
            User::add();
             
          //  $users = User::all(); //$wants readAll - why?
            //require_once('views/user/create.php');
            echo '<p class="left-pad">Congratulations and welcome to the Gap Yah Community!</p>';
      }
    }
    
        public function authenticate() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if(!empty($_SESSION)) {
              session_destroy();
          }
          require_once('views/user/authenticate.php');

      }
      else { 
          
            User::authenticate();
            if (!empty($_SESSION)){
              echo '<p class="left-pad">Succesfully logged in!</p>';
              echo $_SESSION['login_user'];
            }
        else {
            
              echo '<p class="left-pad"> Oh no! You have failed to login. Please try again.</p>';
            }
          //  $users = User::all(); //$wants readAll - why?
            //require_once('views/user/create.php');
            
      }
    }
    public function getwriterdetails(){
        $writers = writer::getwriterdetails();
        require_once('views/user/about.php');
    }
}