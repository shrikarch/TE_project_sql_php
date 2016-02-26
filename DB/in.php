<?php
if(isset($_POST['Name'])=== true && empty($_POST['Name'])===false)
{
	include_once('../DB/conn.php');

	$query=mysql_query(" SELECT *
	FROM 'reservationaiis'
	WHERE 'reservationaiis'.'Name'= '". mysql_real_escape_string(trim($_POST['Name']))."'
	");


}


echo (mysql_result($query, 0));



?>