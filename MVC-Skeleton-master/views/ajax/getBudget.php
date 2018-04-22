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
        <?php
        echo "<table>
        <tr>
        <th>Country</th>
        <th>PriceofPint</th>
        <th>PriceofHostel</th>
        </tr>";
        ?>
        <?php foreach($ajaxs as $ajax) {
            echo "<tr>";
            echo "<td>" . $ajax->CountryName . "</td>";
            echo "<td>&pound;" . $ajax->PriceOfPint . "</td>";
            echo "<td>&pound;" . $ajax->PriceOfHostel . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
      