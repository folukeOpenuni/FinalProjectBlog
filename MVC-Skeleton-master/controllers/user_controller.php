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
             
            $users = User::all(); //$wants readAll - why?
            require_once('views/user/create.php');
      }
    }
}