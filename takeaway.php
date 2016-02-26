<?php


$con=mysqli_connect("localhost","root","","connais");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO orderii (Name, Address, appetizers, soups, lunch, desserts)
VALUES
('$_POST[Name]','$_POST[Address]','$_POST[appetizers]','$_POST[soups]','$_POST[lunch]','$_POST[desserts]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Reservation done!";

mysqli_close($con);
?>