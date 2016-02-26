<?php


$con=mysqli_connect("localhost","root","","connais");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO reservations (Restaurant, table_no, date, no_of_persons)
VALUES
('$_POST[Restaurant]','$_POST[table_no]','$_POST[date]','$_POST[no_of_persons]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Reservation done!";

mysqli_close($con);
?>