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
echo "<li>","RESERVATION ID: &nbsp".$state['res_id']."</li>","<br>";
echo "<li>","Name: &nbsp".$state['Name']."</li>","<br>";
echo "<li>","Restaurant: &nbsp".$state['Restaurant']."</li>","<br>";
echo "<li>","Table no:&nbsp ".$state['table_no']."</li>","<br>";
echo "<li>","Date: &nbsp".$state['date']."</li>","<br>";
echo "<li>","No of persons: &nbsp".$state['no_of_persons']."</li>","<br>","<br>","<br>","<br>";

echo "</ul>";
echo "</div>";

}



}

?>