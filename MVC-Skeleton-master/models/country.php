<?php

class country extends continent {
    
    public $CountryID;
    public $Country;
    public $PriceofBeer;
    public $PriceofHostel;


    public function getlocation() {
        echo ($this->Country . ", ".$this->Continent);
    }
    
    public function LocalPrices() {
        echo ("Beer is ".$this->PriceofBeer." and the average price of a hostel per night is ".$this->PriceofHostel);
    }
        
    }
    


