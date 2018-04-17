<?php

class commentController {
    public function display (){
        $comment = comment::DisplayComment();
        require_once ('views/blogposts/read.php');
    }
    
    public function delete (){
        $comment = comment::DeleteComment();
        require_once ('views/blogposts/read.php');
    }
    
    public function create (){
        $comment = comment::CreateComment();
        require_once ('views/blogposts/read.php');
    }
}

