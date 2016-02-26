<?php
if($_POST['partialState']){



mysql_connect("localhost","root","") or die (mysql_error());

mysql_select_db("connais") or die (mysql_error());

$partialStates= $_POST['partialState'];

$states=mysql_query("SELECT * FROM orderii WHERE name LIKE '%$partialStates%' ");

while($state= mysql_fetch_array($states)){

// echo "<div>".$state['Name']."</div>";


echo "<div>";
echo "<ul>";
echo "<li>","ORDER ID: &nbsp".$state['ord_id']."</li>","<br>";
echo "<li>","Name: &nbsp".$state['Name']."</li>","<br>";
echo "<li>","Address: &nbsp".$state['Address']."</li>","<br>";
echo "<li>","Appetizers:&nbsp ".$state['appetizers']."</li>","<br>";
echo "<li>","Soups: &nbsp".$state['soups']."</li>","<br>";
echo "<li>","Lunch / Dinner: &nbsp".$state['lunch']."</li>","<br>";
echo "<li>","Desserts: &nbsp".$state['desserts']."</li>","<br>","<br>","<br>","<br>";

echo "</ul>";
echo "</div>";

}



}

?>