<?php

class PagesController {
   
    public function home() {
      //example data to use in the home page
      
      require_once('views/pages/home.php');
    }
    
    public function about() {
      //example data to use in the home page
      require_once('views/pages/about.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function getBudget(){
        echo "test";
//$q = intval($_GET['q']);
    $db = Db::getInstance();
      //use intval to make sure $id is an integer
    //$BlogPostID = intval($BlogPostID);
    $req = $db->prepare("SELECT * FROM country WHERE CountryID = '".$q."'");
      //the query was prepared, now replace :id with the actual $id value
      $req->execute();
      $result = $req->fetch();
      
if($result){
echo "<table>
<tr>
<th>Country</th>
<th>PriceofPint</th>
<th>PriceofHostel</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Country'] . "</td>";
    echo "<td>" . $row['PriceofPint'] . "</td>";
    echo "<td>" . $row['PriceofHostel'] . "</td>";
    echo "</tr>";
}
echo "</table>";
      
      
}
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }
}
