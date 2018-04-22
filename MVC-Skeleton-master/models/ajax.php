<?php
  class ajax {

    // we define 3 attributes
    public $CountryName;
    public $PriceOfHostel;
    public $PriceOfPint;

    public function __construct($CountryName, $PriceOfHostel, $PriceOfPint){

            //$country, $keyword, $continent, $comment) {
     
    $this->CountryName = $CountryName;
    $this->PriceOfHostel = $PriceOfHostel;
    $this->PriceOfPint = $PriceOfPint;

    }

public static function getBudget($countryID) {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query("SELECT Country, PriceOfHostel, replace(PriceOfPint,'£','&pound;') as PriceOfPint FROM country WHERE CountryID = '$countryID'");
    // we create a list of Product objects from the database results
    foreach($req->fetchAll() as $ajax) {
         $list[] = new ajax($ajax['Country'], $ajax['PriceOfHostel'],$ajax['PriceOfPint']);
    }
   return $list;
}
#    return new Ajax($test['BlogPostID']
#    echo "test 2";
}
?>