<?php
class ajaxController {
    
   public function getBudget(){
       //echo "test 2";
       $countryID = intval($_GET['countryID']);
       $ajaxs = ajax::getBudget($countryID);
        require_once('views/ajax/getBudget.php');
   }
}