<?php

class continentController {
    public function africa() {
      // we store all the posts in a variable
      $continents = continent::all();
      require_once('views/ContinentPosts/africa.php');
    }
}
