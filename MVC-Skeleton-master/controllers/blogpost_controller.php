<?php

class blogpostController {
    public function readAll() {
      // we store all the posts in a variable
      $blogposts = blogpost::all();
      require_once('views/blogposts/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['BlogPostID']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blogpost = blogpost::find($_GET['BlogPostID']);
      require_once('views/blogposts/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/blogposts/create.php');
      }
      else { 
            blogpost::add();
             
            $blogposts = blogpost::all(); //$products is used within the view
            require_once('views/blogposts/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['BlogPostID']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $blogpost = blogpost::find($_GET['BlogPostID']);
      
        require_once('views/blogposts/update.php');
        }
      else
          { 
            $BlogPostID = $_GET['BlogPostID'];
            blogpost::update($BlogPostID);
                        
            $blogposts = blogpost::all();
            require_once('views/blogposts/readAll.php');
      }
      
    }
    public function delete() {
            blogpost::remove($_GET['BlogPostID']);
            
            $blogposts = blogpost::all();
            require_once('views/blogposts/readAll.php');
      }
      
      public function africa() {
          
      // we use the given id to get the correct post
      $blogposts = blogpost::africa();
      require_once('views/blogposts/africa.php');
      }
 
 }
      
      
    
  
?>