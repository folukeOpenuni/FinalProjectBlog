<?php

class continent{
    
    public $ContinentID;
    public $Continent;
    public $Photo;
    
public function __construct($ContinentID, $Continent, $Photo)  {
    $this->ContinentID = $ContinentID;
    $this->Continent = $Continent;
    $this->Photo = $Photo;
}  
}

