<?php
if($_POST['partialState']){



mysql_connect("localhost","root","") or die (mysql_error());

mysql_select_db("connais") or die (mysql_error());

$partialStates= $_POST['partialState'];

$states=mysql_query("SELECT * FROM reservationaiis WHERE name LIKE '%$partialStates%' ");

while($state= mysql_fetch_array($states)){

// echo "<div>".$state['Name']."</div>";


echo "<div>";
echo "<ul>";
echo "<li>","reservation ID.: ".$state['res_id']."</li>";
echo "<li>","Name: ".$state['Name']."</li>";
echo "<li>","Restaurant: ".$state['Restaurant']."</li>";
echo "<li>","Table no.: ".$state['table_no']."</li>";
echo "<li>","Date: ".$state['date']."</li>";
echo "<li>","No of persons: ".$state['no_of_persons']."</li>";

echo "</ul>";
echo "</div>";

}



}

?>