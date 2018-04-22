<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
echo "test";
$q = intval($_GET['q']);
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

?>
</body>
</html>
